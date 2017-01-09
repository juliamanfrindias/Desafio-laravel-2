<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('desafio', function () {
    return view('desafio');
});


Route::group(array('prefix' => 'desafio'), function()
{
	Route::resource('tarefas', 'TarefasController');
	
	Route::resource('tags', 'TagsController');
	
	Route::resource('pesquisar', 'PesquisarController');	
	
});

Route::post('desafio/pesquisar/search', 'PesquisarController@search');












