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
    return view('welcome-lava');
});
Route::get('welcome', function () {
    return view('welcome');
});
Route::get('2020-welcome', function () {
    return view('2020-welcome');
});

Route::get('about-us', function () {
    return view('about-us-lava');
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

Route::get('storytime-with-a-twist', function () {
    return view('storytime-with-a-twist-lava');
});

Route::get('music-lessons', function () {
    return view('music-lessons-lava');
});

Route::get('calendar', function () {
    return view('calendar-lava');
});

Route::get('info', function () {
    return view('info');
});

Route::get('staff', function () {
    return view('staff-lava');
});
//Route::get('recital', function () {
//    return view('recital');
//});
//Route::post('recital', function () {
//    return view('recital');
//});
//Route::get('camps', function () {
//    return view('camps');
//});
Route::get('nutcracker', function () {
    return view('nutcracker-lava');
});
Route::get('/fall', function () {
    return view('/fall-lava');
});
Route::get('/summer', function () {
    return view('/summer');
});

Route::get('/dress-code', function () {
    return view('/dress-code-lava');
});
Route::get('/privacy-policy', function () {
    return view('/privacy-policy');
});
Route::get('/hubs/music', function () {
    return view('/hubs/music');
});
Route::get('/hubs/dance', function () {
    return view('/hubs/dance');
});
//Route::get('/sou-welcome', function () {
//    return view('/sou-welcome');
//});

// -----------------SEO-------------------- //
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
Route::get('/dance-lessons-kentwood-mi', function () {
    return view('/dance-lessons-kentwood-mi');
});
Route::get('/dance-hastings-mi', function () {
    return view('/dance-hastings-mi');
});
Route::get('/dance-classes-wayland-mi', function () {
    return view('/dance-classes-wayland-mi');
});
Route::get('/dance-classes-grand-rapids-mi', function () {
    return view('/dance-classes-grand-rapids-mi');
});
Route::get('/kentwood-dance', function () {
    return view('/kentwood-dance');
});
Route::get('/dance-teacher-jobs-michigan', function () {
    return view('/dance-teacher-jobs-michigan');
});
Route::get('/dance-studios-byron-center', function () {
    return view('/dance-studios-byron-center');
});
Route::get('/dance-classes-hastings-mi', function () {
    return view('/dance-classes-hastings-mi');
});
Route::get('/dance-grand-rapids', function () {
    return view('/dance-grand-rapids');
});
Route::get('/dance-studios-kentwood-mi', function () {
    return view('/dance-studios-kentwood-mi');
});
Route::get('/dance-studios-grand-rapids', function () {
    return view('/dance-studios-grand-rapids');
});
Route::get('/byron-center-dance', function () {
    return view('/byron-center-dance');
});
Route::get('/grand-rapids-dance', function () {
    return view('/grand-rapids-dance');
});
Route::get('/hastings-dance', function () {
    return view('/hastings-dance');
});
Route::get('/kentwood-dance-studios', function () {
    return view('/kentwood-dance-studios');
});
Route::get('/wayland-dance', function () {
    return view('/wayland-dance');
});
Route::get('/christmas-events-caledonia', function () {
    return view('/christmas-events-caledonia');
});
Route::get('/music-lessons-kentwood', function () {
    return view('/music-lessons-kentwood');
});
Route::get('/dance-classes-kentwood', function () {
    return view('/dance-classes-kentwood');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('updates', 'UpdateController');
Route::resource('posts', 'PostController');
Route::resource('texts', 'TextController');
Route::resource('hubs', 'HubController');

Route::get('contact', 'ContactUsController@create')->name('contact.create');
Route::post('contact', 'ContactUsController@store')->name('contact.store');

Route::get('refer', 'ReferController@create')->name('refer.create');
Route::post('refer', 'ReferController@store')->name('refer.store');

Route::get('employment', 'EmploymentController@create')->name('employment.create');
Route::post('employment', 'EmploymentController@store')->name('employment.store');
