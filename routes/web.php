<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlbumController;
use App\Models\Album;

//CRUD DE IMAGENS SIMPLES




//ROTAS QUE RETORNAM VIEWS 

Route::get('/', [AlbumController::class, 'viewWelcome']);
Route::get('/welcome', [AlbumController::class, 'viewWelcome']);
Route::get('/new', [AlbumController::class, 'viewNewAlbum']);
Route::get('/edit/{id}', [AlbumController::class, 'viewEditAlbum'])->name('view-edit-album');


//ROTAS QUE RETORNAM OPERAÇÕES DO CRUD

Route::post('/new', [AlbumController::class, 'postAlbum'])->name('new-album');
Route::get('/show/{id}', [AlbumController::class, 'showAlbum'])->name('show-album');
Route::get('/delete/{id}', [AlbumController::class, 'deleteAlbum'])->name('delete-album');
Route::post('/edit/{id}', [AlbumController::class, 'editAlbum'])->name('edit-album');


//ROTAS TESTE

Route::get('/test', function() {
    dd(Album::find(1)->toArray());
});
