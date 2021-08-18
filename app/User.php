<?php

namespace App;

use Illuminate\Database\Eloquent\Concerns\HasRelationships;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    function getProduct(){
        return $this->hasMany(Product::class, 'user_id');
    }
}
