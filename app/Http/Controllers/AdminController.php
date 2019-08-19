<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TimeSheet;

use App\Job;
use App\Department;
use App\Level;
use App\Status;
use App\Position;

use App\Prototype_Employee;

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
        $jobs = DB::table('jobs')->get();
        $departments = DB::table('departments')->get();
        $levels = DB::table('levels')->get();
        $statuses = DB::table('statuses')->get();
        $positions = DB::table('positions')->get();

        return view('admin.add_employee', compact('jobs', 'departments', 'levels', 'statuses', 'positions'));
    }    

    public function employeeList()
    {
        $list = DB::table('prototype__employees')
            ->join('departments', 'departments.id', '=', 'prototype__employees.department_id')
            ->join('statuses', 'statuses.id', '=', 'prototype__employees.status_id')
            ->join('levels', 'levels.id', '=', 'prototype__employees.job_level_id')
            ->join('jobs', 'jobs.id', '=', 'prototype__employees.job_id')
            ->join('positions', 'positions.id','=', 'prototype__employees.job_position_id')
            ->select('prototype__employees.*', 'departments.department_name', 'jobs.job_title', 'levels.job_level', 'positions.job_position', 'statuses.job_status')
            ->get();

        return view('admin.employee_list', compact('list'));
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

    public function create(Request $request)
    {
        $proto = new Prototype_Employee([
            
            'employee_id' => $request->get('employee_id'),
            'employee_img' => $request->get('product_image'),
            'gender' => $request->get('gender'),
            'firstname' => $request->get('fname'),
            'middle_name' => $request->get('m_name'),
            'lastname' => $request->get('lname'),
            'department_id' => $request->get('department'),
            'status_id' => $request->get('status'),
            'address' => $request->get('address'),
            'city' => $request->get('city'),
            'province' => $request->get('province'),
            'country' => $request->get('country'),
            'zip_code' => $request->get('zip_code'),
            'home_number' => $request->get('h_number'),
            'mobile_number' => $request->get('m_number'),
            'work_email' => $request->get('h_email'),
            'personal_email' => $request->get('p_email'),
            'birthday' => $request->get('bday'),
            'SIN_SSN' => $request->get('ssn_sin'),
            'emergency_name' => $request->get('e_name'),
            'relationship' => $request->get('relationship'),
            'emergency_address' => $request->get('e_address'),
            'emergency_number' => $request->get('e_number'),
            'job_id' => $request->get('jjob_title'),
            'job_description' => $request->get('info_area'),
            'job_level_id' => $request->get('job_level'),
            'job_position_id' => $request->get('job_position'),
            'date_hired' => $request->get('d_hired'),
            'date_terminated' => $request->get('d_terminated'),
            'SSS_no' => $request->get('sss_n'),
            'philhealth_no' => $request->get('philhealth_n'),
            'pagibig_no' => $request->get('pagibig_n'),
            'TIN_no' => $request->get('tin_n'),
            'NBI_no' => $request->get('nbi_n'),
            'diploma' => $request->get('diploma'),
            'medical' => $request->get('medical'),
            'TOR' => $request->get('TOR'),
            'birth_cert' => $request->get('birth_cert'),
            'brgy_clearance' => $request->get('brgy'),
            'cedula' => $request->get('cedula')
        ]);

        $proto->save();

        return redirect()->route('admin.add_employee');
    }

}
