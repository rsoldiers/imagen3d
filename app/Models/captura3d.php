<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class captura3d extends Model
{
    use HasFactory;
    protected $table = 'captura3ds';

    protected $fillable = [
        'imagenUrl',
        'titulo',
    ];
  
}
