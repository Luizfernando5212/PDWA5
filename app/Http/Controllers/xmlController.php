<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class xmlController extends Controller
{
    //
    public function gerarXml(){
        $dados = Album::all();
        // print_r($dados);

        return response()->view('data-xml', ['registros'=> $dados])->header('Content-Type','application/xml');
    }
}
