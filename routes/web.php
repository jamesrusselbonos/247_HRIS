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

Route::get('/', 'prototypeEmployeeController@redirectDashboard');

// Route::get('/admin', function () {
//     return view('admin');
// });

// Route::get('/add_employee', function () {
//     return view('add_employee');
// });

// Route::get('/employee_list', function () {
//     return view('admin.employee_list');
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
Route::get('/shift', 'AdminController@shift_index')->name('admin.shift.index');
Route::post('/shift', 'AdminController@shift_create')->name('admin.shift.create');
Route::get('/shift/{id}', 'AdminController@shift_delete')->name('admin.shift.delete');
Route::post('/shift/update/{id}', 'AdminController@updateShift')->name('admin.shift.update');

Route::get('/ajaxShowEmployee', 'AdminController@ajaxShowEmployee')->name('admin.ajaxShowEmployee');////Memo Show

Route::get('/add_employee', 'AdminController@addEmployee')->name('admin.add_employee');

Route::post('/add_employee', 'AdminController@create')->name('admin.add_employee.create');

Route::get('/manage_employee', 'AdminController@employeeList')->name('admin.employee_list');
Route::post('/manage_employee/1', 'AdminController@edit_employeeList')->name('admin.employee_list.edit');
Route::get('/manage_employee/{id}', 'AdminController@delete_employeeList')->name('admin.employee_list.delete');

Route::get('/timesheet', 'AdminController@timesheet')->name('admin.timesheet');
Route::get('/time_delete/{id}', 'AdminController@timesheet_delete');

Route::get('/manage_user', 'AdminController@manageUser')->name('admin.manage_user');
Route::get('/user_delete/{id}', 'AdminController@user_delete');

Route::get('/dashboard', 'EmployeeController@index')->name('employee.dashboard');

Route::get('/employee_memo', 'EmployeeController@employee_memo');

Route::get('/employee_leave', 'EmployeeController@leave_index')->name('employee.employee_leave');
Route::get('/employee_leave/edit/{id}', 'EmployeeController@ajaxEditLeave')->name('employee.employee_leave.edit');
Route::post('/employee_leave/update/{id}', 'EmployeeController@leave_update')->name('employee.employee_leave.update');
Route::get('/employee_leave/{id}', 'EmployeeController@ajaxViewLeave')->name('employee.employee_leave.view');
Route::post('/employee_leave/cancel/{id}', 'EmployeeController@cancelLeave')->name('employee.employee_leave.cancel');

Route::get('/leave', 'AdminController@leave_index')->name('admin.employee_leave');
Route::post('/leave', 'AdminController@leave_edit')->name('admin.leave.edit');
Route::get('/delete_leave/{id}', 'AdminController@delete_leave');

Route::get('/memo', 'AdminController@memo_index')->name('admin.memo');
Route::post('/memo', 'AdminController@memo_create')->name('admin.memo.create');
Route::post('/memo/1', 'AdminController@memo_edit')->name('admin.memo.edit');
Route::get('/memo_delete/{id}', 'AdminController@memo_delete');
Route::post('memo_send', 'AdminController@memoSent')->name('admin.memo.sent');
Route::get('/markAll/', 'EmployeeController@markAllRead')->name('employee.memo.markAll');
Route::get('/markRead/', 'EmployeeController@markRead')->name('employee.memo.markRead');

Route::get('/markread/', 'AdminController@markRead')->name('admin.notif.markRead');
Route::get('/markall/', 'AdminController@markAllRead')->name('admin.notif.markAll');

Route::get('/employee', 'EmployeeController@index');

Route::get('/schedule', 'AdminController@schedule_index')->name('schedule.index');
Route::post('/schedule', 'AdminController@schedule_create')->name('admin.sched.create');
Route::get('/schedule/{id}', 'AdminController@schedule_delete');
Route::post('/ajaxScheduleEdit', 'AdminController@ajaxScheduleEdit');
Route::post('/schedule/update/{id}', 'AdminController@schedule_update');

Route::get('/attendance', 'AdminController@attendance_index')->name('attendance.index');
Route::post('/attendance', 'AdminController@attendLoad')->name('attendance.load');
Route::post('/attendance/absent', 'AdminController@attendance_absent')->name('attendance.absent');

Route::get('/leave_types', 'AdminController@leave_types')->name('leave_types.index');
Route::post('/leave_types', 'AdminController@leave_type_create')->name('admin.leave_type.create');
Route::get('/delete_leave_type/{id}', 'AdminController@leave_type_delete');

Route::post('/employee_leave', 'EmployeeController@request_leave_create')->name('employee.request_leave');

Route::get('/payroll', 'AdminController@payroll_index')->name('payroll.index');
Route::post('/ajaxPayroll', 'AdminController@ajaxPayroll')->name('payroll.ajaxPayroll');
Route::post('/payroll', 'AdminController@generatePayroll')->name('payroll.generatePayroll');

Route::get('/employee_overtime', 'EmployeeController@overtime')->name('employee.overtime');
Route::post('/employee_overtime', 'EmployeeController@requestOvertime')->name('employee.request_overtime');
Route::get('/employee_overtime/{id}', 'EmployeeController@ajaxOvertimeView')->name('employee.request_overtime.view');
Route::get('/employee_overtime/edit/{id}', 'EmployeeController@ajaxOvertimeEdit')->name('employee.request_overtime.edit');
Route::post('/employee_overtime/update/{id}', 'EmployeeController@ajaxRequestOvertimeUpdate')->name('employee.request_overtime.update');
Route::post('/employee_overtime/cancel/{id}', 'EmployeeController@requestOvertimeCancel')->name('employee.request_overtime.cancel');


Route::post('/ajaxShowOvertime', 'AdminController@ajaxShowOvertime')->name('admin.ajaxShowOvertime');
Route::get('/overtime', 'AdminController@overtime')->name('admin.overtime');
Route::post('/overtime', 'AdminController@overtimeEdit')->name('admin.overtime.edit');

Route::get('/holidays', 'AdminController@holidays_index')->name('holidays.index');
Route::post('/holidays', 'AdminController@holidays_create')->name('holidays.create');
Route::post('/editHoliday', 'AdminController@edit_holiday')->name('holidays.edit');
Route::get('/holiday_delete/{id}', 'AdminController@delete_holiday')->name('holidays.delete');

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