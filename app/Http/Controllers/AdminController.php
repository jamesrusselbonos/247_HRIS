<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Notification;
use App\Notifications\SendMemo;


use App\TimeSheet;

use App\Job;
use App\Department;
use App\Level;
use App\Status;
use App\Position;

use App\Prototype_Employee;
use App\Memo;
use App\User;
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
            $emp_count = Prototype_Employee::all();
            $dept_count = Department::all();
         

            return view('admin.admin_index', compact('emp_count', 'dept_count'));
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
        $e_depart = DB::table('departments')->get();
        $e_status = DB::table('statuses')->get();
        $e_level = DB::table('levels')->get();
        $e_jobs = DB::table('jobs')->get();
        $e_position = DB::table('positions')->get();

        $list = DB::table('prototype__employees')
            ->join('departments', 'departments.id', '=', 'prototype__employees.department_id')
            ->join('statuses', 'statuses.id', '=', 'prototype__employees.status_id')
            ->join('levels', 'levels.id', '=', 'prototype__employees.job_level_id')
            ->join('jobs', 'jobs.id', '=', 'prototype__employees.job_id')
            ->join('positions', 'positions.id','=', 'prototype__employees.job_position_id')
            ->select('prototype__employees.*', 'departments.department_name', 'jobs.job_title', 'levels.job_level', 'positions.job_position', 'statuses.job_status')
            ->get();
          
        return view('admin.manage_employee', compact('list','e_depart', 'e_status', 'e_level', 'e_jobs','e_position'));
    }

    public function edit_employeeList(Request $request){


        if($request->hasFile('edit_product_image')){

            $filenameWithExt = $request->file('edit_product_image')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $variation = preg_replace('/[\+]/', '', $filename);

            $extension = $request->file('edit_product_image')->getClientOriginalExtension();

            $fileNameToStore = 'img/'.''.$variation.'_'.time().'.'.$extension;
            
            $image = $request->file('edit_product_image');

            $destination = public_path('/img');
             $image->move($destination, $fileNameToStore);
             // $path = $request->file('product_image')->store($destination, $fileNameToStore);

        }
        else{

            $fileNameToStore = "img/profile.png";
        }

        $e_employee = Prototype_Employee::find($request->edit_id);
        $e_employee->employee_id = $request->edit_employee_id;
        $e_employee->employee_img = $fileNameToStore;
        $e_employee->gender = $request->edit_egender;
        $e_employee->firstname = $request->edit_efname;
        $e_employee->middle_name = $request->edit_emname;
        $e_employee->lastname = $request->edit_elname;
        $e_employee->department_id = $request->edit_edepartmant;
        $e_employee->status_id = $request->edit_estatus;
        $e_employee->address = $request->edit_eaddress;
        $e_employee->city = $request->edit_ecity;
        $e_employee->province = $request->edit_eprovince;
        $e_employee->country = $request->edit_ecountry;
        $e_employee->zip_code = $request->edit_ezip;
        $e_employee->home_number = $request->edit_ehnumber;
        $e_employee->mobile_number = $request->edit_emnumber;
        $e_employee->work_email = $request->edit_ewemail;
        $e_employee->personal_email = $request->edit_epemail;
        $e_employee->birthday = $request->edit_ebday;
        $e_employee->SIN_SSN = $request->edit_essnsin;
        $e_employee->emergency_name = $request->edit_emgname;
        $e_employee->relationship = $request->edit_emgrelationship;
        $e_employee->emergency_address = $request->edit_emgaddress;
        $e_employee->emergency_number = $request->edit_emgnumber;
        $e_employee->job_id = $request->edit_ejobtitle;
        $e_employee->job_description = $request->edit_ejobdesc;
        $e_employee->job_level_id = $request->edit_ejoblevel;
        $e_employee->job_position_id = $request->edit_ejobposition;
        $e_employee->date_hired = $request->edit_edatehired;
        $e_employee->date_terminated = $request->edit_edateterminated;
        $e_employee->SSS_no = $request->edit_esss;
        $e_employee->philhealth_no = $request->edit_ephilhealth;
        $e_employee->pagibig_no = $request->edit_epagibig;
        $e_employee->TIN_no = $request->edit_etin;
        $e_employee->NBI_no = $request->edit_enbi;
        $e_employee->diploma = $request->edit_ediploma;
        $e_employee->medical = $request->edit_emedical;
        $e_employee->TOR = $request->edit_etor;
        $e_employee->birth_cert = $request->edit_ebirth;
        $e_employee->brgy_clearance = $request->edit_ebirth;
        $e_employee->cedula = $request->edit_ecedula;

        $e_employee->save();

        return redirect()->route('admin.employee_list'); 
    }

    public function delete_employeeList($id){
        
        DB::table('prototype__employees')->where('id', $id)->delete();

        return redirect()->route('admin.employee_list');
    }    

    // public function manageEmployee()
    // {
    //     return view('admin.manage_employee');
    // }    

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
        $m_user = DB::table('users')->get();

        return view('admin.manage_user', compact('m_user'));
    }

    public function create(Request $request)
    {

        if($request->hasFile('product_image')){

            $filenameWithExt = $request->file('product_image')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $variation = preg_replace('/[\+]/', '', $filename);

            $extension = $request->file('product_image')->getClientOriginalExtension();

            $fileNameToStore = 'img/'.''.$variation.'_'.time().'.'.$extension;
            
            $image = $request->file('product_image');

            $destination = public_path('/img');
             $image->move($destination, $fileNameToStore);
             // $path = $request->file('product_image')->store($destination, $fileNameToStore);

        }
        else{

            $fileNameToStore = "img/profile.png";
        }
        $proto = new Prototype_Employee([
            
            'employee_id' => $request->get('employee_id'),
            'employee_img' => $fileNameToStore,
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

    public function timesheet_delete($id){

        DB::table('timesheets')->where('id', $id)->delete();

        return redirect()->route('admin.timesheet');
    }

    public function user_delete($id){

        DB::table('users')->where('id', $id)->delete();

        return redirect()->route('admin.manage_user');
    }

    public function memo_index(){

        $memo_employee = DB::table('prototype__employees')->get();
        $memo_user = DB::table('users')->get();
        $memos = DB::table('memos')->get();

        return view('admin.memo', compact('memo_employee', 'memos', 'memo_user'));
    }

    public function memo_create(Request $request){
        
        if($files = $request->file('file')){
            $filename = $files->getClientOriginalName();

            if($files->move('documents', $filename)){
                $memo = new Memo();
                $memp_name = $request->get('memo');
                $memp_subj = $request->get('subject');
                $memo_date = $request->get('memo_date');
                
                $memo->attachment = $filename;
                $memo->memo = $memp_name;
                $memo->subject = $memp_subj;
                $memo->memo_date = $memo_date;

                $memo->save();

                return redirect()->route('admin.memo');
                
            };
        }
        return redirect()->back();
    }

    public function memo_delete($id){

        DB::table('memos')->where('id', $id)->delete();

        return redirect()->route('admin.memo');
    }

    public function memoSent(Request $request){
        
        // $users = User::with('roles')->get();
        // $users = User::roles('employee')->get(); 
        $users = User::with('roles')->where('role','2')->get();
        // dd($users);

        foreach ($users as $user){
            $user->notify(new SendMemo);
        }

        
        return redirect()->back();
    }

}
