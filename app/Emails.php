<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emails extends Model
{
    protected $fillable = [
        'subject', 'to', 'from', 'description',
    ];
}
