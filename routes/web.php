<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    /*return view('welcome');*/
    return "Hola mundo";
});


Route::get('cursos', function () {
    /*return view('welcome');*/
    return "Bienvenidos a mis cursos";
});

Route::get('cursos/create', function(){
    return "En esta pagina podras crear un curso";
});

// Route::get('cursos/{curso}', function ($curso) {
//     /*return view('welcome');*/
//     return "Bienvenidos a mis cursos: $curso";
// });

route::get('cursos/{curso}/{categoria?}',function($curso, $categoria = null){//valor de categoria opcional
    if($categoria){
        return "Bienvenido al curso $curso, de la categoria $categoria";
    }else{
        return "Bienvenido al curso $curso";
    }
});

