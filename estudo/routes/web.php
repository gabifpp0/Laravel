<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/empresa', function() {
    return view('empresa');
});

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
