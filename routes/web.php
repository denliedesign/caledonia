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

Route::get('about-us', function () {
    return view('about-us');
});

//Route::get('class-schedule', function () {
//    return view('class-schedule');
//});

Route::get('introduce-a-friend', function () {
    return view('introduce-a-friend');
});

Route::get('birthday-parties', function () {
    return view('birthday-parties');
});

Route::get('mini-camps', function () {
    return view('mini-camps');
});

Route::get('storytime-with-a-twist', function () {
    return view('storytime-with-a-twist');
});

Route::get('nutcracker', function () {
    return view('nutcracker');
});

Route::get('music-lessons', function () {
    return view('music-lessons');
});

Route::get('calendar', function () {
    return view('calendar');
});

Route::get('info', function () {
    return view('info');
});

Route::get('staff', function () {
    return view('staff');
});

//Route::get('recital', function () {
//    return view('recital');
//});

Route::get('/fall', function () {
    return view('/fall');
});

Route::get('/dress-code', function () {
    return view('/dress-code');
});

Route::get('/dance-byron-center', function () {
    return view('/dance-byron-center');
});
Route::get('/dance-kentwood-mi', function () {
    return view('/dance-kentwood-mi');
});
Route::get('/dance-studios-hastings-mi', function () {
    return view('/dance-studios-hastings-mi');
});
Route::get('/dance-wayland-mi', function () {
    return view('/dance-wayland-mi');
});

//Route::get('/sou-welcome', function () {
//    return view('/sou-welcome');
//});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('updates', 'UpdateController');
Route::resource('posts', 'PostController');
Route::resource('texts', 'TextController');

Route::get('contact', 'ContactUsController@create')->name('contact.create');
Route::post('contact', 'ContactUsController@store')->name('contact.store');

Route::get('refer', 'ReferController@create')->name('refer.create');
Route::post('refer', 'ReferController@store')->name('refer.store');
