<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    
    public function viewWelcome() 
    {
        $albums = \App\Models\Album::orderByDesc('id')->get();
        return view('welcome', compact('albums'));
    }

    public function viewNewAlbum() 
    {
        return view('new');
    }

    
    public function viewEditAlbum($id)
    {
        $album = Album::findOrFail($id);
        return view('edit_album', ['album' => $album]);
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

    public function showAlbum($id)
    {
        $album = Album::findOrFail($id);
        return view('foto', ['album' => $album]);
    }

    public function deleteAlbum($id)
    {
        $album = Album::findOrFail($id);
        $album->delete();

        return redirect('/welcome');
    }

    public function editAlbum(Request $request, $id)
    {
        $album = Album::findOrFail($id);
        $album->update([
            'description' => $request->input('description')
        ]);
        return redirect('/welcome');
    }

}
