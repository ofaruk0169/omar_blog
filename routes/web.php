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

// Route::get('/', function () {
//     //return view('welcome');
//     return 'Hello world';
// });

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');


// Route::get('/hello', function () {
//     //return view('welcome');
//     return '<h1>Hello world</h1>';
// });


// Route::get('/about', function () {
//     //return view('welcome');
//     return view('pages.about');
// });

Route::get('/users/{id}', function ($id) {
    //return view('welcome');
    return 'this is a user ' . $id;
});


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::resource('posts', 'PostsController');


Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('posts', 'Pagination@show');

