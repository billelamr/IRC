<?php

// app/Models/SizeBubbletea.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SizeBubbletea extends Model
{
    protected $table = 'size_bubbleteas';
    protected $fillable = ['id_size', 'id_bubbletea'];
    public $timestamps = false;

    public function size()
    {
        return $this->belongsTo(Size::class, 'id_size', 'id');
    }

    public function bubbletea()
    {
        return $this->belongsTo(Bubbletea::class, 'id_bubbletea', 'id');
    }
}