<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TimeSheet;

use DB;

class AdminController extends Controller
{
	public function __construct()
	    {
	        $this->middleware('auth');
	        $this->middleware('role:Admin');
	    }

    public function index()
        {
            return view('admin.admin');
        }    

    public function addEmployee()
    {
        return view('admin.add_employee');
    }    

    public function employeeList()
    {
        return view('admin.employee_list');
    }    

    public function manageEmployee()
    {
        return view('admin.manage_employee');
    }    

    public function timesheet()
    {
        $time = DB::table('timesheets')
            ->join('users', 'users.id', '=', 'timesheets.employee_id')
            ->select('timesheets.*', 'users.name')
            ->get();

        return view('admin.timesheet', compact('time'));
    }    

    public function manageUser()
    {
        return view('admin.manage_user');
    }
}
