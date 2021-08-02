<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PropertyController;
use App\http\Controllers\Fav_Property_Controller;

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
})->name('index');
Route::get('/','PropertyController@topProperties');




Route::get('/aboutus', function () {
    return view('frontend.aboutus');
});


// Favourites
Route::view('/favorites','frontend.favorites');
Route::get('/favorites','Fav_Property_Controller@showfavProperties');



Route::view('submit','frontend.submit');
Route::post('submit' ,'PropertyController@addProperty')->name('addproperty');

Route::get('/myproperty', function () {
    return view('frontend.myproperty');
})->name('myproperty');
Route::get('property_delete.{id}' , 'PropertyController@delete');
Route::get('myproperty' , 'PropertyController@properties');
Route::get('edit_property.{id}','PropertyController@edit');
Route::post('edit_property.{id}','PropertyController@updateProperty')->name('updateProperty');


Route::view('profile','frontend.profile');
Route::post('profile','ProfileController@addProfile')->name('addprofile');
Route::get('profile','profilepicture@profile');
Route::post('profile_pic','profilepicture@profile_pic')->name('profile_pic');

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
// Fav_property

Route::get('addFavourite/{id}','Fav_Property_Controller@addFavourite')->name('addfavourite');
Route::get('delete.{id}','Fav_Property_Controller@delete');


Auth::routes();



//Property Details


Route::get('property_details.{id}','PropertyController@property_details')->name('property_details');



//Admin Panel

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
