<?php

namespace App\Http\Controllers;

use App\services\MainService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Laravel\Pail\Files;

use function Laravel\Prompts\error;

class MainController extends Controller
{
    private MainService $service;

    public function __construct()
    {
        $this->service = new MainService;
    }

    public function home()
    {


        $filters = [
            'year' => 0,
            'category' => 0,
            'input' => null,
        ];

        $categories = $this->service->searchAllCategories();
    
        $years = $this->service->searchAllYears();

        $books = $this->service->searchWithFilters($filters);

        return view('home', [
            "categories" => $categories,
            "years" => $years,
            "books" => $books->getData()
        ]);
    }

    public function homeFilter(Request $request) {
        $request->validate(
            [
                'year' => 'required',
                'category' => 'required'
            ],
            [
                'year.required' => 'OBRIGATÓRIO SELECIONAR ANO!',
                'category.required' => 'OBRIGATÓRIO SELECIONAR CATEGORIA!',
            ]
        );


        $filters = [
            'year' => $request->input('year'),
            'category' => $request->input('category'),
            'input' => $request->input('book'),
        ];

        $categories = $this->service->searchAllCategories();
    
        $years = $this->service->searchAllYears();

        $books = $this->service->searchWithFilters($filters);

        if(!$books->getStatus()) {
            
            return redirect()
                ->back()
                ->withInput()
                ->with('searchFail', $books->getMessage());
        }

        return view('home', [
            "categories" => $categories,
            "years" => $years,
            "books" => $books->getData()
        ]);
    }

    public function create(){

        $categories = $this->service->searchAllCategories();

        return view('register', ['categories' => $categories]);
    }

    public function createSubmit(Request $request) {
        $request->validate(
            [
                'title' => 'required',
                'author' => 'required',
                'year' => 'required|integer',
                'category' => 'required',
                'image' => 'required'
            ],
            [   
                'title.required' => 'OBRIGATÓRIO SELECIONAR TITULO!',
                'author.required' => 'OBRIGATÓRIO SELECIONAR AUTOR!',
                'year.required' => 'OBRIGATÓRIO SELECIONAR ANO!',
                'year.integer' => 'O ANO PRECISA SER UM NÚMERO INTEIRO!',
                'category.required' => 'OBRIGATÓRIO SELECIONAR CATEGORIA!',
                'image.required' => 'OBRIGATÓRIO SELECIONAR IMAGEM DO LIVRO!',
            ]
        );

        $data = [
            'id' => Crypt::decrypt('id'),
            'title' => $request->input('title'),
            'author_id' => $request->input('author'),
            'year' => $request->input('year'),
            'category_id' => $request->input('category'),
            'url' => $request->input('url'),
            'image' => $request->hasFile('image') ? $request->file('image') : null,
            'created_at' => Carbon::now('America/Sao_Paulo')
        ];


        $this->service->create($data);

        return redirect()->route('home');
    }


    public function update($id) {

        $response = $this->service->searchBookById($id);

        if(!$response->getStatus()) {
            return redirect()
                ->back()
                ->withInput()
                ->with("updateFail", $response->getMessage());
        }

        $book_category = $this->service->searchCategoryById($response->getData()->category_id);

        if(!$book_category->getStatus()) {
            return redirect()
                ->back()
                ->withInput()
                ->with("updateFail", $book_category->getMessage());
        }

        $categories = $this->service->searchAllCategories();

        foreach($categories as $category) {
            if($category->id != $book_category->getData()->id) {
                $categoriesWithoutCategoryBook[] = $category;
            }
        }

        return view('update', [ 
                'categories' => $categoriesWithoutCategoryBook,
                'book' => $response->getData()
            ]);
    }

    public function updateSubmit(Request $request){
        $request->validate(
            [
                'id' => 'required',
                'title' => 'required',
                'author' => 'required',
                'year' => 'required|integer',
                'category' => 'required',
            ],
            [   
                'id.required' => 'ERRO AO BUSCAR LIVRO',
                'title.required' => 'OBRIGATÓRIO SELECIONAR TITULO!',
                'author.required' => 'OBRIGATÓRIO SELECIONAR AUTOR!',
                'year.required' => 'OBRIGATÓRIO SELECIONAR ANO!',
                'year.integer' => 'O ANO PRECISA SER UM NÚMERO INTEIRO!',
                'category.required' => 'OBRIGATÓRIO SELECIONAR CATEGORIA!',
            ]
        );

        $data = [
            'id' => $request->input('id'),
            'title' => $request->input('title'),
            'author_id' => $request->input('author'),
            'year' => $request->input('year'),
            'category_id' => $request->input('category') == 0 ? null : $request->input('category'),
            'url' => $request->input('url'),
            'image' => $request->file('image'),
            'created_at' => Carbon::now('America/Sao_Paulo')
        ];


        $response = $this->service->update($data);

        if(!$response->getStatus()) {
            return redirect()
                ->back()
                ->withInput()
                ->with('updateFailed', $response->getMessage());
        }

        return redirect()->route('home');
    }
}
