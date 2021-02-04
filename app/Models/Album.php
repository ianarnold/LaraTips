<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $table = "albums";

    protected $fillable = [
        'description',
        'image_path'
    ];

    protected $hidden = [
        'image_path'
    ];

    //MODEL APPENDS (SERVE PRA NÃO DEIXAR O USUARIO VER O CAMPO REAL DO BANCO)

    protected $appends = [
        'image_url'
    ];

    public function getImageUrlAttribute() {
        return asset('storage/' . $this->attributes['image_path']);
    }

}

