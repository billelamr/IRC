<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SugarBubbletea extends Model
{
    protected $table = 'sugar_bubbleteas';

    public $timestamps = false;

    protected $fillable = [
        'id_sugar',
        'id_bubbletea',
    ];

    // Vous pouvez ajouter des relations ici si nécessaire
    // public function sugar()
    // {
    //     return $this->belongsTo(Sugar::class, 'id_sugar');
    // }

    // public function bubbletea()
    // {
    //     return $this->belongsTo(Bubbletea::class, 'id_bubbletea');
    // }
}