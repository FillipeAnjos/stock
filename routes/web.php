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
use App\Http\Controllers\ProductController;

// Rota abaixo é a rota inicial do sistema
Route::get('/inicio', function () {

    $welcome = "Olá seja bem vindo(a)";
    $nome = "Fillipe dos Anjos";

    return view('welcome', [
                    'welcome' => $welcome, 
                    'nome' => $nome]
                );
});

// Rota abaixo serve como teste
Route::get('/', function(){
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


// Rota abaixo serve para criar os fornecedores 
Route::get('/create-provider', function(){
    return view('providers/criar-fornecedor');
});

// Rota abaixo serve para criar as categorias 
Route::get('/create-category', function(){
    return view('categorys/criar-categoria');
});

// Rota abaixo serve para criar as marcas 
Route::get('/create-brand', function(){
    return view('brands/criar-marca');
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
Route::get('/delete-brand/{id}', [BrandController::class, 'destroy']);
Route::get('/edit-brand/{id}', [BrandController::class, 'edit']);
Route::post('/update-brand', [BrandController::class, 'update']);
Route::post('/save-brand', [BrandController::class, 'save']);

// Produto
Route::get('/product', [ProductController::class, 'index']);
Route::get('/delete-product/{id}', [ProductController::class, 'destroy']);
Route::get('/edit-product/{id}', [ProductController::class, 'edit']);
Route::post('/update-product', [ProductController::class, 'update']);
Route::get('/create-product', [ProductController::class, 'fetchData']);
Route::post('/save-product', [ProductController::class, 'save']);


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
