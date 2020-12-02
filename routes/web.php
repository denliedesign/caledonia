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

Route::get('class-schedule', function () {
    return view('class-schedule');
});

Route::get('birthday-parties', function () {
    return view('birthday-parties');
});

Route::get('lesson-lab', function () {
    return view('lesson-lab');
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('updates', 'UpdateController');
Route::resource('posts', 'PostController');
