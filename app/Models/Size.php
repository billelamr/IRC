<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes';

    protected $fillable = ['name'];

    // Vous pouvez ajouter d'autres propriétés et relations ici si nécessaire
}