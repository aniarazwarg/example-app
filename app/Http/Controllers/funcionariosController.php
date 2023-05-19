<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class funcionariosController extends Controller
{
    public function mostrar()
    {
        return view ('mostrar');
    }
    //para usar usa-se  uma nova rota no web.php


    //Adicionar/Atualizar:
    public function inclusao()
    {
        return view ('inclusao');
    }

    //Detalhes:
    public function detalhes()
    {
        return view ('detalhes');
    }
}
