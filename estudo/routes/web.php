<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Grupo de rotas
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
], function(){

    Route::get('dashboard', function(){
        return "dashboard";
    })->name('dashboard');

    Route::get('users', function(){
        return "users";
    })->name('users');
});

Route::view('/empresa', 'empresa');

Route::any('/any', function() {
    return "Permite todo tipo de acesso http (put, delete, get, post)";
});

Route::match(['get', 'post'], '/match', function() {
    return "Permite apenas acessos definidos";
});

Route::get('/produto/{id}', function($id) {
    return "O id do produto é".$id;
});

Route::redirect('/sobre', '/empresa');

Route::get('/news', function() {
    return view('news');
})->name('noticias');

Route::get('/novidades', function() {
    return redirect()->route('noticias');
});