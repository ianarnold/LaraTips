<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlbumController;
use App\Models\Album;

//CRUD DE IMAGENS SIMPLES




//ROTAS QUE RETORNAM VIEWS 

Route::get('/', [AlbumController::class, 'viewWelcome']);
Route::get('/welcome', [AlbumController::class, 'viewWelcome']);
Route::get('/new', [AlbumController::class, 'viewNewAlbum']);


//ROTAS QUE RETORNAM OPERAÇÕES DO CRUD

Route::post('/new', [AlbumController::class, 'postAlbum'])->name('new-album');


//ROTAS TESTE

Route::get('/test', function() {
    dd(Album::find(1)->toArray());
});
