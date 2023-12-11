<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PoppingBubbletea extends Model
{
    protected $table = 'popping_bubbleteas';

    public function popping()
    {
        return $this->belongsTo(Popping::class, 'id_popping');
    }

    public function bubbletea()
    {
        return $this->belongsTo(Bubbletea::class, 'id_bubbletea');
    }
}