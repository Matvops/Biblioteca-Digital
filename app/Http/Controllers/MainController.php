<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class MainController extends Controller
{
    public function home(): View
    {
        $categories = DB::table("categories")->get()->toArray();
        
        $years = DB::table("books")
            ->groupBy("year")
            ->orderBy("year", "desc")
            ->get("year");

        $books = DB::table("books")
            ->join("authors", "author_id", "=", "authors.id")
            ->get()
            ->toArray();

        error_log(json_encode($books[0]->image));

        return view('home', [
            "categories" => $categories,
            "years" => $years,
            "books" => $books
        ]);
    }
}
