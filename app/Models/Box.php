<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Illuminate\Http\Client\Request;

class Box extends Model
{
    use HasFactory;

    protected $fillables = [
        'name',
        'length',
        'width',
        'height',
    ];

    /**
     *  product
     *
    */
    public function compareProduct()
    {
        $this->hasMany(Product::class);
    }
}
