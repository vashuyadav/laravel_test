<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('productList/{user_id?}','UserController@getUserProduct');
Route::get('email','EmailController@index');
Route::post('sendMail','EmailController@sendMyMail')->name('sendMyMail');
