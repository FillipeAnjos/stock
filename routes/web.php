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

use App\Http\Controllers\ProviderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;

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

// Rotar abaixo só poderá ser listada por administradores do sistema
Route::get('users', function(){
    return view('/users/usuarios');
});

// Rotar abaixo serve para listar ou cadastrar todos os produtos cadastrados com seus filtros
Route::get('/products', function(){
    return view('products/produtos');
});


// Rotar abaixo serve para criar os fornecedores 
Route::get('/create-provider', function(){
    return view('providers/criar-fornecedor');
});

// Rotar abaixo serve para criar as categorias 
Route::get('/create-category', function(){
    return view('categorys/criar-categoria');
});

/* 
    ******************************************************
    ******************** Controller's ********************
    ******************************************************
*/

// Fornecedores
Route::get('/provider', [ProviderController::class, 'index']);
Route::get('/delete-provider/{id}', [ProviderController::class, 'destroy']);
Route::get('/edit-provider/{id}', [ProviderController::class, 'edit']);
Route::post('/update-provider', [ProviderController::class, 'update']);
Route::post('/save-provider', [ProviderController::class, 'save']);

// Categorias
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/delete-category/{id}', [CategoryController::class, 'destroy']);
Route::get('/edit-category/{id}', [CategoryController::class, 'edit']);
Route::post('/update-category', [CategoryController::class, 'update']);
Route::post('/save-category', [CategoryController::class, 'save']);

// Marcas
Route::get('/brand', [BrandController::class, 'index']);


/* 
    ******************************************************
    ************************ Auth ************************
    ******************************************************
*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
