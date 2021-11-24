<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelAlbum extends Model
{
    use HasFactory;
    protected $table = "albuns";
    protected $fillable =['nomedamusica', 'artista', 'genero', 'preco', 'duracao','urlImagem'];
}
