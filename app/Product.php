<?php

namespace App;

use Illuminate\Database\Eloquent\Factory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'title', 'description', 'image', 'user_id',
    ];

}
