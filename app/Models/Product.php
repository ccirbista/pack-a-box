<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillables = [
        'name',
        'length',
        'width',
        'height',
    ];

    /**
     *  box
     *
    */

    public function box()
    {
        $this->belongsTo(Box::class);
    }

}
