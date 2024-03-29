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

Route::get('/home', function() {
    return view('index');
});

Route::get('/contato', function() {
    return view('contato');
});
Route::post('/send-mail', 'ContactController@sendMail');

Route::get('/galeria', function() {
    return view('galeria');
});

Route::redirect('/', '/index');



