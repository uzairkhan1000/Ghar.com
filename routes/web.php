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
    return view('index');
})->name('home');
// Route::get('/','HomeController@index')->name('home');
// Route::get('/getcode','HomeController@getCode');

Route::get('/aboutus', function () {
    return view('frontend.aboutus');
});
Route::get('/favorites', function () {
    return view('frontend.favorites');
});
Route::get('/submit', function () {
    return view('frontend.submit');
});
Route::get('/myproperty', function () {
    return view('frontend.myproperty');
});
Route::get('/profile', function () {
    return view('frontend.profile');
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
