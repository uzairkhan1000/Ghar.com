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
    return view('home');
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
Route::get('/agents', function () {
    return view('frontend.agents');
});
Route::get('/agentprofile', function () {
    return view('frontend.agentprofile');
});
Route::get('/properties1', function () {
    return view('frontend.properties1');
});
Route::get('/sale', function () {
    return view('frontend.sale');
});
Route::get('/rent', function () {
    return view('frontend.rent');
});
Route::get('/news', function () {
    return view('frontend.news');
});
Route::get('/testimonial', function () {
    return view('frontend.testimonial');
});
Route::get('/faq', function () {
    return view('frontend.faq');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
