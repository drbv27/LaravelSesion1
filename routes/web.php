<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Ruta Basica */

Route::get('/juan', function () {
    return 'Hola Juan';
});

/* Ruta con parametros */
Route::get('/users/detail/{category}/{id}', function ($category, $id) {
    return "Detalles del usuario: {$id}, categoria: {$category}";
});

/* Ruta con parametros opcionales */

Route::get('/home/{name}/{nickname?}', function ($name, $nickname = null) {
    if($nickname) {
        return "Hello {$name}, tu nickname es: {$nickname}";
    } else {
        return "Hello {$name}";
    }
});

/* Rutas que son controladas por un controller */

Route::get('/users', 'UserController@index');
Route::get('users/detail/{id}', 'UserController@welcome' );

/* Crear una profession */

Route::get('/profession/create', 'ProfessionController@create');
Route::get('/professions/', 'ProfessionController@showAll');
