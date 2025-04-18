<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected function sendResponse($view, $response){
        return view($view, ['response' => $response]);
    }
}
