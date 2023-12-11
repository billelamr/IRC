<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Base extends Model
{
    protected $table = 'bases';

    protected $fillable = ['name'];

    // Si les colonnes created_at et updated_at ne sont pas présentes dans votre table
    public $timestamps = false;

    // Vous pouvez ajouter d'autres propriétés et relations ici si nécessaire
}