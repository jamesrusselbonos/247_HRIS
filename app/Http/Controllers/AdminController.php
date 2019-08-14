<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('admin.timesheet');
    }    

    public function manageUser()
    {
        return view('admin.manage_user');
    }
}
