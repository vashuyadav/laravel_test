<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index(){
        return view('emailForm');
    }

    public function sendMyMail(){
        return "send here";
    }
}
