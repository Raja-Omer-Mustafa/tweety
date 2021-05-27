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

Route::middleware('auth')->group(function () {
    Route::get('/tweets', 'TweetsController@index')->name('home');
    Route::post('/tweets', 'TweetsController@store')->name('tweets.store');

    Route::post('/tweets/{tweet}/like', 'TweetLikesController@store');
    Route::delete('/tweets/{tweet}/like', 'TweetLikesController@destroy');

    Route::post(
        '/profiles/{user:username}/follow',
        'FollowsController@store'
    )->name('follow');

    Route::get(
        '/profiles/{user:username}/edit',
        'ProfilesController@edit'
    )->middleware('can:edit,user');

    Route::patch(
        '/profiles/{user:username}',
        'ProfilesController@update'
    )->middleware('can:edit,user');

    Route::get('/explore', 'ExploreController@search')->name('explore');
});

Route::get('/profiles/{user:username}', 'ProfilesController@show')->name(
    'profile'
);
Route::get('/search/', 'ProfilesController@search')->name('search');


Route::get('/contact', 'ContactusController@index')->name('contact');
Route::post('/sendmail','ContactusController@sendMail')->name('sendmail');


Route::get('/index', 'AdminController@index');

Auth::routes();

Route::middleware(['PermissionCheck','auth'])->group(function(){
 
 Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');
Route::resource('permissions', 'PermissionController');


 
 }); 
