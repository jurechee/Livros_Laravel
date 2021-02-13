<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\Livro2Controller;


/*Route::get('/', function () {
    return view('welcome');
});

Route::resource('/livros', LivroController::class);*/

Route::get('/', [Livro2Controller::class, 'index']);

Route::resource('livros', Livro2Controller::class);