<?php

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

function sayHi(){
    return ['greeting'=>'say hay from function'];
}
Route::get('/sendMessage', function () {

    event(new App\Events\SendMessage(sayHi()));
    dd('Event Run Successfully.');
});
Route::get('/', function () {
    return view('welcome');
});
