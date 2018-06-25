<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index($slug){
        return view('usuarios', [
            'texto' => 'fulano de tal ',
            'checagem'=> true,
            'usuarios' => ['usuario1', 'usuario2', 'usuario3', 'usuario4' ],
            'parametro' => $slug
            ]);
    }
}
