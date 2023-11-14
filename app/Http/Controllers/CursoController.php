<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "Bienvenidos a mis cursos";
    }

    public function create(){
        return "En esta pagina podras crear un curso v:";
    }

    public function show($curso){
        return "Bienvenidos a mis cursos: $curso";
    }
    
}
