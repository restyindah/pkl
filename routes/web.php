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

Route::get('/', function () {
    return view('index');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/FUNNY', function () {
    return view('FUNNY');
});

Route::get('/VIDEOS', function () {
    return view('VIDEOS');
});

Route::get('/DONT MISS', function () {
    return view('DONT MISS');
});

Route::get('/MEGA MENU', function () {
    return view('MEGA MENU');
});

Route::get('/admin',function() {
    return view('welcome');
});
Route::group(['prefix'=>'admin','middleware'=>['auth']],
function () {
    Route::get('/admin', function () {
        return view('backend.index');
    });
    route::resource('kategori','kategoriController');
    route::resource('tag','TagController');
    route::resource('artikel','ArtikelController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/siswa',function() {
    return view('siswa');
});


Route::get('/Kategori',function() {
    return view('kategori');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
