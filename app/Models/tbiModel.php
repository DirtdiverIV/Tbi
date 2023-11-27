<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbiModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_real',
        'descripcion_real',
        // Otros campos que puedas tener...
    ];
}
