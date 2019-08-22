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
    return view('auth.login');
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

Route::get('/punch_in_out', 'TimesheetController@index');
Route::post('/timeIn/{id}', 'TimesheetController@timeIn')->name('timeIn');
Route::post('/timeOut/{id}', 'TimesheetController@timeOut')->name('timeOut');

// Route::get('/home', 'HomeController@index')->name('home');

////////////////ADMIN DASHBOARD/////////////////////////
Route::get('/admin', 'AdminController@index')->name('admin.admin');

Route::get('/add_employee', 'AdminController@addEmployee')->name('admin.add_employee');

Route::post('/add_employee', 'AdminController@create')->name('admin.add_employee.create');

Route::get('/manage_employee', 'AdminController@employeeList')->name('admin.employee_list');
Route::get('/manage_employee', 'AdminController@employeeList')->name('admin.employee_list');

Route::get('/timesheet', 'AdminController@timesheet')->name('admin.timesheet');
Route::get('/time_delete/{id}', 'AdminController@timesheet_delete');

Route::get('/manage_user', 'AdminController@manageUser')->name('admin.manage_user');
Route::get('/user_delete/{id}', 'AdminController@user_delete');

////////////////////////////////////////////////////////
////////////////EMPLOYEE DASHBOARD//////////////////////

Route::get('/dashboard', 'EmployeeController@index')->name('employee.dashboard');

Route::get('/employee', function () {
    return view('employee.employee');
});

Route::get('/job_title', 'jobController@index' );
Route::post('/job_title', 'jobController@create' )->name('admin.job_title');
Route::post('/job_title/1', 'jobController@edit' )->name('admin.job_title.edit');
Route::get('/job_delete/{id}', 'jobController@delete' );


Route::get('/department', 'departmentController@index' );
Route::post('/department', 'departmentController@create' )->name('admin.department');
Route::post('/department/1', 'departmentController@edit' )->name('admin.department.edit');
Route::get('/delete/{id}', 'departmentController@delete' );

// Route::post('/department/2', 'departmentController@delete' )->name('admin.department.delete');

Route::get('/job_status', 'statusController@index' );
Route::post('/job_status', 'statusController@create' )->name('admin.job_status');
Route::post('/job_status/1', 'statusController@edit' )->name('admin.job_status.edit');
Route::get('/status_delete/{id}', 'statusController@delete' );

Route::get('/job_level', 'levelController@index' );
Route::post('/job_level', 'levelController@create' )->name('admin.job_level');
Route::post('/job_level/1', 'levelController@edit' )->name('admin.job_level.edit');
Route::get('/level_delete/{id}', 'levelController@delete' );


Route::get('/job_position', 'positionController@index' );
Route::post('/job_position', 'positionController@create' )->name('admin.job_position');
Route::post('/job_position/1', 'positionController@edit' )->name('admin.job_position.edit');
Route::get('/position_delete/{id}', 'positionController@delete' );

/////////////////////////////////////////////////////////