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

// Rota abaixo é a rota inicial do sistema
Route::get('/', function () {

    $welcome = "Olá seja bem vindo(a)";
    $nome = "Fillipe dos Anjos";

    return view('welcome', [
                    'welcome' => $welcome, 
                    'nome' => $nome]
                );
});

// Rota abaixo serve como teste
Route::get('/inicio', function(){
    return view('inicio');
});

// Rotar abaixo serve para listar ou cadastrar todos os produtos cadastrados com seus filtros
Route::get('/products', function(){
    return view('products/produtos');
});

// Rotar abaixo só poderá ser listada por administradores do sistema
Route::get('users', function(){
    return view('/users/usuarios');
});





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});