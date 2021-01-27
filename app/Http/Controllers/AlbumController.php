<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    
    public function viewWelcome() 
    {
        return view('welcome');
    }

    public function viewListAlbum() 
    {
        return view('list');
    }

    public function viewNewAlbum() 
    {
        return view('new');
    }

}
