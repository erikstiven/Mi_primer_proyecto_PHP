<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return view('cursos.index');
    }

    public function create(){
        return view('cursos.create');
    }

    public function show($curso){
        // compact('curso'); //Siempre y cuando la variable de la funcion sea similar a la variable de la vista
        return view('cursos.show',compact('curso'));
    }
    
}
