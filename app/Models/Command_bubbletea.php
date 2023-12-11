<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandBubletea extends Model
{
    use HasFactory;

    protected $table = 'command_bubleteas';

    protected $fillable = [
        'date_command',
        'id_user',
        'id_bubbletea',
        'id_popping',
        'id_sugar',
        'id_size',
        'quantity',
        'final_price',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function bubbleTea()
    {
        return $this->belongsTo(BubbleTea::class, 'id_bubbletea');
    }

    public function popping()
    {
        return $this->belongsTo(Popping::class, 'id_popping');
    }

    public function sugar()
    {
        return $this->belongsTo(Sugar::class, 'id_sugar');
    }

    public function size()
    {
        return $this->belongsTo(Size::class, 'id_size');
    }
}