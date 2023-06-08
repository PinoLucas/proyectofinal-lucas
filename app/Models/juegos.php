<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class juegos extends Model
{
    use HasFactory;
    protected $table = 'juegos';

    protected $fillable = [
        'nombre',
        'genero',
        'fecha de lanzamiento',
        'empresa',
        'plataformas',
    ];
}
