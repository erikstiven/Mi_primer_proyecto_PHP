<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
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
Route::get('/', HomeController::class);
// Route::get('/', 'HomeController');

//grupo de rutas
Route::controller(CursoController::class)->group(function(){
    Route::get('cursos',  'index');//->manera mas practica de definir un controlador
    // Route::get('cursos', 'CursoController@index');
    
    Route::get('cursos/create', 'create');
    // Route::get('cursos/create', 'CursoController@create');
    
    Route::get('cursos/{curso}',  'show');
    // Route::get('cursos/{curso}', 'CursoController@show');
});




// route::get('cursos/{curso}/{categoria?}',function($curso, $categoria = null){//valor de categoria opcional
//     if($categoria){
//         return "Bienvenido al curso $curso, de la categoria $categoria";
//     }else{
//         return "Bienvenido al curso $curso";
//     }
// });


