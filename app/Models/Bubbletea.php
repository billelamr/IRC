<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BubbleTea extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'id_base',
        'first_price',
    ];

    public function base()
    {
        return $this->belongsTo(Base::class, 'id_base');
    }
}