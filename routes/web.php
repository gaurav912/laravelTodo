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


Route::get('/admin/', function () {
    return view('dashboard');
});

Route::get('/admin', function () {
    return view('dashboard');
});

Route::get('/admin/dashboard', function () {
    return view('dashboard');
});

Route::get('/admin/gallery', function () {
    return view('gallery');
});

Route::get('/admin/calendar', function () {
    return view('calendar');
});

// Routes for Task Controllerr

Route::get('/admin/task', 'TaskController@index');
Route::post('/admin/task/', 'TaskController@store');
Route::get('/admin/task/edit/{id}','TaskController@edit')->name('admin.task.edit');
Route::post('/admin/task/update','TaskController@update');
Route::post('/admin/task/delete/{id}','TaskController@destroy');

Route::get('/admin/login', function () {
    return view('login');
});

Route::get('/admin/register', function () {
    return view('register');
});

Route::get('/admin/forgot-password', function () {
    return view('forgot-password');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
