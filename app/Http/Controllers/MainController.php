<?php

namespace App\Http\Controllers;

use App\services\MainService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class MainController extends Controller
{
    private MainService $service;

    public function __construct()
    {
        $this->service = new MainService;
    }

    public function home(Request $request)
    {
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
}
