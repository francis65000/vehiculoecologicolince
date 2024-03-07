<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = "blog";
    protected $fillable = ['titulo', 'descripcion','id_imagen','fecha_publicacion'];

}
