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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/main', function () {
//     return view('mains');
// });

//versi terbaru controller
// Route::get('/index',[PagesController::class,'home']);

Route::get('/','PagesController@home');

Route::get('/about','PagesController@tentang');

Route::get('/sejarah','PagesController@sejarah');
Route::get('/data','PagesController@data');
Route::get('/video','PagesController@video');



// Route::get();

// function tambah2 ($nilai1) {
//     $hasil = $nilai1 + 2;

//     return $hasil
// }