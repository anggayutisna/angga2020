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
    return view('frontend.home');
});

Route::get('/tentang', function () {
    return view('frontend.about');
});

Route::get('/administrasi', function () {
    return view('frontend.adminis');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/halaman_login', function () {
    return view('frontend.Login.login');
});

Route::get('/login_guru', function () {
    return view('frontend.Login.loginguru');
});

Route::get('/login_siswa', function () {
    return view('frontend.Login.loginsiswa');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
