<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class albumController extends Controller
{
    //
    public function salvar(Request $request){
        $request->validate([
            "autor" => "required|min:3|max:50",
            "genero_musical" => "required|min:3|max:50",
            "qtd_musicas" => "required|integer",
            "tempo_min"=> "required|integer",
            "data_lancamento"=> "required|date",
        ]);

        $album = new Album();
        $album-> fill($request->all());
        $album->save();

        return view("save");


        // dd($request);
    }
}
