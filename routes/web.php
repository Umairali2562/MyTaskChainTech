<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::get('/admin/user/roles',['middleware'=>['role','auth','web'],function(){

    return "Middleware role";
}]);

route::get('/home','AdminController@index');
//route::post('/home/{name}/email/password/confirmpassword','HomeController@create');
Route::post('home', 'HomeController@create')->name('home.create');