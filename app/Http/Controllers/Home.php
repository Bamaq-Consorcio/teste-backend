<?php

namespace App\Http\Controllers;
use App\Models\Morador;

use Illuminate\Http\Request;

class Home extends Controller
{
    public static function index(){
        // erro ao fazer a consulta SELECT * FROM 'moradors'
        // SQLSTATE[HY000] [2002] Connection refused
        // pesquisei e li que é um erro local mesmo, de alguma incompatibilidade da minha máquina

    // $moradors = Morador::all();

        //return view('welcome', ['moradores'=>$moradores]);

        return view('welcome');
    }
}
