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
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/add_employee', function () {
    return view('add_employee');
});

Route::get('/employee_list', function () {
    return view('employee_list');
});

Route::get('/attendance', function () {
    return view('attendance');
});
Route::get('/manage_employee', function () {
    return view('manage_employee');
});
Route::get('/timesheet', function () {
    return view('timesheet');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
