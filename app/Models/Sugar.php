<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sugar extends Model
{
    protected $table = 'sugars';

    protected $fillable = ['quantity'];

    // Vous pouvez ajouter d'autres propriétés et relations ici si nécessaire
}