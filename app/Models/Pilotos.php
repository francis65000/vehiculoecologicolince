<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pilotos extends Model
{
    protected $table = "pilotos";
    protected $fillable = ['nombre', 'equipo','id_imagen'];
   
}