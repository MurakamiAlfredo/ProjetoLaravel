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
    $nome = 'Alfredo';
    $idade = 26;

    $arr = [10,20,30,40,50];

    $nomes = ['Alfredo','Kaori','Bi','Sandra'];

    return view('welcome',
    [
        'nome' => $nome,
        'idade' => $idade,
        'profissao' => 'Programador',
        'arr'=> $arr,
        'names' => $nomes
    ]);
});

Route::get('/contatos', function () {
    return view('contacts');
});

Route::get('/produtos', function(){
    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/produtos_teste/{id?}', function($id = null){
    return view('product',['id' => $id]);
});
