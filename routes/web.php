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

// Route::get('/admin', function () {
//     return view('admin');
// });

// Route::get('/add_employee', function () {
//     return view('add_employee');
// });

// Route::get('/employee_list', function () {
//     return view('employee_list');
// });

// Route::get('/attendance', function () {
//     return view('attendance');
// });
// Route::get('/manage_employee', function () {
//     return view('manage_employee');
// });
// Route::get('/timesheet', function () {
//     return view('timesheet');
// });
// Route::get('/manage_user', function () {
//     return view('manage_user');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

////////////////ADMIN DASHBOARD/////////////////////////
Route::get('/admin', 'AdminController@index')->name('admin.admin');
Route::get('/add_employee', 'AdminController@addEmployee')->name('admin.add_employee');
Route::get('/employee_list', 'AdminController@employeeList')->name('admin.employee_list');
Route::get('/manage_employee', 'AdminController@manageEmployee')->name('admin.manage_employee');
Route::get('/timesheet', 'AdminController@timesheet')->name('admin.timesheet');
Route::get('/manage_user', 'AdminController@manageUser')->name('admin.manage_user');

////////////////////////////////////////////////////////
////////////////EMPLOYEE DASHBOARD//////////////////////

Route::get('/dashboard', 'EmployeeController@index')->name('employee.dashboard');

/////////////////////////////////////////////////////////