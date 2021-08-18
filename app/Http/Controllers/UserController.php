<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;



class UserController extends Controller
{
    public function getUserProduct($userId = NULL){
        if($userId == NULL)
            $response = User::with(['getProduct'])->get();
        else
            $response = User::whereId($userId)->with(['getProduct'])->get();

        return $response;
    }
}
