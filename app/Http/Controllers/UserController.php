<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
    public function getUserProduct($userId = NULL){
        if($userId == NULL) {
            $records = User::with(['getProduct'])->get();
            //
            //$records = User::all();
        }
        else{
            $records = User::whereId($userId)->with(['getProduct'])->get();
            //$records = User::whereId($userId)->get();
        }
        $tot = User::all();
//        return $records;
        return view('productView', compact('records','tot'));
    }
}
