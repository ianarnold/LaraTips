<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\Album;

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
    

    public function postAlbum(Request $request) 
    {

        $extension = $request->file('image')->getClientOriginalExtension();
        $fileName = Str::random(10) . "." . $extension;

        $request->file('image')->storeAs('public/images', $fileName);

        Album::create([
            'description' => $request->input('description'),
            'image_path' => "images/" . $fileName
        ]);

        return redirect('/welcome');
    }
}
