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

Route::get('/app-download', function () {
    return view('app-download');
});

Route::get('/join', function () {
    return redirect('https://discord.com/invite/4tUKZ8f');
});


