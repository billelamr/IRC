<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Popping extends Model
{
    use HasFactory;

    protected $table = 'poppings';

    protected $fillable = [
        'name',
    ];

    // Si vous avez des relations avec d'autres modèles, vous pouvez les définir ici
}