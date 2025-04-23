<?php

namespace App\services;

use App\Exceptions\FilterException;
use App\Exceptions\NotFoundException;
use App\Utils\Response;
use Exception;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\search;

class MainService {

    public function update($data) {
        try {

            DB::beginTransaction();
        
            $data['id'] = Crypt::decrypt($data['id']);
            $data['author_id'] = $this->searchAuthorByName($data['author_id']);

            $book = DB::table('books')
                ->where('id', $data['id'])
                ->first();

            if($data['image']) {
                $filename = date('YmdH') . $data['image']->getClientOriginalName();
                $data['image']->move(public_path('uploads'), $filename);
                $data['image'] =   'projects/bibli-digital/public/uploads/' . $filename;
            } else {
                $data['image'] = $book->image;
            }

            if(!$data['category_id']) {
                $data['category_id'] = $book->category_id;
            }    
            
            if(!DB::table('books')->where('id', $data['id'])->update($data)) 
                throw new Exception();
            
            DB::commit();
            return Response::getResponse(true, '');

        } catch (Exception $e) {
            DB::rollBack();
            return Response::getResponse(false, "Falha ao atualizar livro");
        }
    }

    public function searchAuthorByName($name) {
        try {
            $author = DB::table('authors')
                ->whereLike('name', "$name")
                ->first();

            if(empty($author))
                throw new NotFoundException();
            
            return $author->id;
        } catch (NotFoundException $e) {
            return Response::getResponse(false, $e->getMessage());
        } catch(Exception $e) {
            return Response::getResponse(false, 'Erro ao carregar os dados');
        }
    }

    public function searchCategoryById($id){
        try {

            $category = DB::table('categories')
                ->where('id', $id)
                ->first();

            if(empty($category)) 
                throw new NotFoundException("Não foi possível localizar esta categoria");

            return Response::getResponse(true, '', $category);
        } catch (NotFoundException $e){
            return Response::getResponse(false, $e->getMessage());
        } catch (Exception $e) {
            return Response::getResponse(false, 'Erro ao carregar os dados');
        }
    }

    public function searchBookById($id){
        try {
            $id = Crypt::decrypt($id);

            $data = DB::table('books')
                ->join('authors', 'author_id', '=', 'authors.id')
                ->join('categories', 'category_id', '=', 'categories.id')
                ->where('books.id', $id)
                ->first(['books.*', 'authors.name']);

            if(empty($data)) 
                throw new NotFoundException("Não foi possível carregar os dados!");

            return Response::getResponse(true, '', $data);
        } catch (NotFoundException $e){
            return Response::getResponse(false, $e->getMessage());
        } catch (Exception $e) {
            return Response::getResponse(false, 'Erro ao carregar os dados');
        }
    }

    public function create($data){
        try {
            DB::beginTransaction();
        
           
            $filename = date('YmdH') . $data['image']->getClientOriginalName();
            $data['image']->move(public_path('uploads'), $filename);
            $data['image'] =   'projects/bibli-digital/public/uploads/' . $filename;

            $data['author_id'] = $this->getAuthorId($data['author_id']);

            if(!DB::table('books')->insert($data)) 
                throw new Exception();
            
            DB::commit();
            return Response::getResponse(true, '');

        } catch (Exception $e) {
            DB::rollBack();
            return Response::getResponse(false, "Falha ao cadastrar livro");
        }
    }

    private function getAuthorId($name) {

        $author = DB::table('authors')
            ->whereLike("name", "_" . "$name" . "_")
            ->first();
        
        if(empty($author)) {

            DB::table('authors')->insert(['name' => $name]);

            $author = DB::table('authors')
                ->whereLike("name", "%$name%")
                ->first();
        }

        return $author->id;
    }

    public function searchAllCategories(){

        return DB::table("categories")->get()->toArray();
    }

    public function searchAllYears(){

        return DB::table("books")
                ->groupBy("year")
                ->orderBy("year", "desc")
                ->get("year")
                ->toArray();
    }

    public function searchWithFilters($filters): Response
    {

        try {

            if(!empty($filters['input'])) 
                return Response::getResponse(true, '', $this->searchByInput($filters['input']));
            
            return Response::getResponse(true, '', $this->filterHome($filters['category'], $filters['year']));
        } catch (FilterException $e) {
            return Response::getResponse(false, $e->getMessage());
        }
    }

    private function searchByInput($input){
        
        try {

            $books = DB::table('books')
                ->join("authors", "author_id", "=", "authors.id")
                ->whereLike("title", "%$input%")
                ->get(['books.*', 'authors.id as author_id', 'authors.name'])
                ->toArray();

            if(empty($books)) 
                throw new NotFoundException("Não existe livros com este título!");
                
            return $books;

        } catch (NotFoundException $e) {
            throw new FilterException($e->getMessage());
        }   catch (Exception $e) {
            throw new FilterException($e->getMessage());
        }
    }

    public function filterHome($category_id, $year)
    {

        try {

            if($category_id != 0  || $year != 0) 
                return $this->filter($year, $category_id);
           
            return DB::table("books")
                ->join("authors", "author_id", "=", "authors.id")
                ->get(['books.*', 'authors.id as author_id', 'authors.name'])
                ->toArray();

        }  catch (NotFoundException $e) {
            throw new FilterException($e->getMessage());
        }   catch (Exception $e) {
            throw new FilterException($e->getMessage());
        }
    }

    private function filter($year, $category_id) {

        if($category_id == 0) 
            return $this->filterOnlyYear($year);
        
        if($year == 0) 
            return $this->filterOnlyCategory($category_id);
            
        return $this->filterYearAndCategory($year,$category_id);
    }

    private function filterOnlyYear($year){

        $books = DB::table("books")
            ->join("authors", "author_id", "=", "authors.id")
            ->where("books.year", $year)
            ->get(['books.*', 'authors.id as author_id', 'authors.name'])
            ->toArray();

        if(empty($books))
            throw new NotFoundException("Este ano não possui livros lançados!");

        return $books;
    }

    private function filterOnlyCategory($category_id) {

        $books = DB::table("books")
                    ->join("authors", "author_id", "=", "authors.id")
                    ->where("books.category_id", $category_id)
                    ->get(['books.*', 'authors.id as author_id', 'authors.name'])
                    ->toArray();

        if(empty($books))
            throw new NotFoundException("Esta categoria não possui livros!");

        return $books;
    }

    private function filterYearAndCategory($year, $category_id){

        $books = DB::table("books")
                    ->join("authors", "author_id", "=", "authors.id")
                    ->where("books.year", $year)
                    ->where("books.category_id", $category_id)
                    ->get(['books.*', 'authors.id as author_id', 'authors.name'])
                    ->toArray();

        if(empty($books)) 
            throw new NotFoundException();

        return $books;
    }
}