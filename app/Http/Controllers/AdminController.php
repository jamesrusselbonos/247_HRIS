<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Hash;
use App\Notifications\SendMemo;
use App\Notifications\RequestLeave;
use App\Notifications\AssignSchedule;

use Carbon\Carbon;

use App\TimeSheet;

use App\Job;
use App\Department;
use App\Level;
use App\Status;
use App\Position;

use App\Holiday;
use App\Absent;
use App\Payroll;

use App\Prototype_Employee;
use App\Overtime;
use App\Schedule;
use App\Shift;
use App\Memo;
use App\Leave_type;
use App\Leave;
use App\User;
use DB;
use App\Role;

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
            $memo_report = Memo::all();
            $timesheet = TimeSheet::all();

            $total_time = DB::table('timesheets')->sum('time_duration');

            $leave_count = Leave::where('leave_status', 'Pending')->get();
            
            $sched_report = DB::table('schedules')
            ->join('prototype__employees', 'prototype__employees.employee_id', '=', 'schedules.employee_id')
            ->select('schedules.*', 'prototype__employees.firstname', 'prototype__employees.lastname', 'prototype__employees.middle_name', 'prototype__employees.employee_id')
            ->get();

            // $TimeSheet_report = DB::table('timesheets')
            // ->join('users', 'users.employee_id', '=', 'timesheets.employee_id')
            // ->select('timesheets.*', 'users.*')
            // ->get();
            $TimeSheet_report = DB::table('users')
                ->join('timesheets', 'timesheets.employee_id', '=', 'users.employee_id')
                ->join('prototype__employees', 'prototype__employees.employee_id', '=', 'users.employee_id')
                ->select('timesheets.*', 'users.*', 'prototype__employees.*')
                ->get();
            
            $list = DB::table('prototype__employees')
                ->join('departments', 'departments.id', '=', 'prototype__employees.department_id')
                ->join('statuses', 'statuses.id', '=', 'prototype__employees.status_id')
                ->join('levels', 'levels.id', '=', 'prototype__employees.job_level_id')
                ->join('jobs', 'jobs.id', '=', 'prototype__employees.job_id')
                ->join('positions', 'positions.id','=', 'prototype__employees.job_position_id')
                ->select('prototype__employees.*', 'departments.department_name', 'jobs.job_title', 'levels.job_level', 'positions.job_position', 'statuses.job_status')
                ->get();

            $leave_report = DB::table('leaves')
                ->join('leave_types', 'leave_types.id', '=', 'leaves.leave_id')
                ->select('leaves.*', 'leave_types.*')
                ->get();

            $absents = DB::table('absents')
            ->join('prototype__employees', 'prototype__employees.employee_id', '=', 'absents.employee_id')
            ->select('absents.*', 'prototype__employees.*')
            ->get();

            return view('admin.admin_index', compact('emp_count', 'dept_count', 'TimeSheet_report', 'memo_report', 'sched_report', 'leave_count', 'list', 'leave_report','timesheet', 'total_time','absents'));
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
        $e_employee->email = $request->edit_ewemail;
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
        $time = DB::table('users')
            ->join('timesheets', 'timesheets.employee_id', '=', 'users.employee_id')
            ->join('prototype__employees', 'prototype__employees.employee_id', '=', 'users.employee_id')
            ->select('timesheets.*', 'users.*', 'prototype__employees.*')
            ->get();

        return view('admin.timesheet', compact('time'));
    }    

    public function manageUser()
    {
        // $m_user = DB::table('users')->get();
        $m_user = DB::table('users')
            ->join('prototype__employees', 'users.employee_id', '=', 'prototype__employees.employee_id')
            ->select('users.*', 'prototype__employees.firstname', 'prototype__employees.lastname')
            ->get();

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
        $user = new User;
        $user->email = $request->email;
        $user->employee_id = $request->employee_id;
        $user->password = Hash::make($request->password);

        $user->save();
        $role = Role::select('id')->where('name', 'Employee')->first();
        $user->roles()->attach($role);

       $user->save();

       $files_diploma = $request->file('file_diploma');
       $files_tor = $request->file('file_tor');
       $files_bclearance = $request->file('file_bclearance');
       $files_mcert = $request->file('file_mcert');
       $files_bcert = $request->file('file_bcert');
       $files_cedula = $request->file('file_cedula');

       $filename_diploma = $files_diploma->getClientOriginalName();
       $filename_tor = $files_tor->getClientOriginalName();
       $filename_bclearance = $files_bclearance->getClientOriginalName();
       $filename_mcert = $files_mcert->getClientOriginalName();
       $filename_bcert = $files_bcert->getClientOriginalName();
       $filename_cedula = $files_cedula->getClientOriginalName();


   
        $proto = new Prototype_Employee;

        $proto->employee_id = $request->get('employee_id');
        $proto->email = $request->email;
        $proto->employee_img = $fileNameToStore;
        $proto->gender = $request->get('gender');
        $proto->firstname = $request->get('fname');
        $proto->middle_name = $request->get('m_name');
        $proto->lastname = $request->get('lname');
        $proto->department_id = $request->get('department');
        $proto->status_id = $request->get('status');
        $proto->address = $request->get('address');
        $proto->city = $request->get('city');
        $proto->province = $request->get('province');
        $proto->country = $request->get('country');
        $proto->zip_code = $request->get('zip_code');
        $proto->home_number = $request->get('h_number');
        $proto->mobile_number = $request->get('m_number');
        $proto->personal_email = $request->get('p_email');
        $proto->birthday = $request->get('bday');
        $proto->SIN_SSN = $request->get('ssn_sin');
        $proto->emergency_name = $request->get('e_name');
        $proto->relationship = $request->get('relationship');
        $proto->emergency_address = $request->get('e_address');
        $proto->emergency_number = $request->get('e_number');
        $proto->job_id = $request->get('jjob_title');
        $proto->job_description = $request->get('info_area');
        $proto->job_level_id = $request->get('job_level');
        $proto->job_position_id = $request->get('job_position');
        $proto->date_hired = $request->get('d_hired');
        $proto->date_terminated = $request->get('d_terminated');
        $proto->leave_credit = $request->get('leave_credit');
        $proto->salary = $request->get('salary');
        $proto->allowance = $request->get('allowance');
        $proto->SSS_no = $request->get('sss_n');
        $proto->philhealth_no = $request->get('philhealth_n');
        $proto->pagibig_no = $request->get('pagibig_n');
        $proto->TIN_no = $request->get('tin_n');
        $proto->NBI_no = $request->get('nbi_n');
        $proto->diploma = $filename_diploma;
        $proto->medical = $filename_mcert;
        $proto->TOR = $filename_tor;
        $proto->birth_cert = $filename_bcert;
        $proto->brgy_clearance = $filename_bclearance;
        $proto->cedula = $filename_cedula;

        // $proto = new Prototype_Employee([
            
        //     'employee_id' => $request->get('employee_id'),
        //     'email' => $request->email,
        //     'employee_img' => $fileNameToStore,
        //     'gender' => $request->get('gender'),
        //     'firstname' => $request->get('fname'),
        //     'middle_name' => $request->get('m_name'),
        //     'lastname' => $request->get('lname'),
        //     'department_id' => $request->get('department'),
        //     'status_id' => $request->get('status'),
        //     'address' => $request->get('address'),
        //     'city' => $request->get('city'),
        //     'province' => $request->get('province'),
        //     'country' => $request->get('country'),
        //     'zip_code' => $request->get('zip_code'),
        //     'home_number' => $request->get('h_number'),
        //     'mobile_number' => $request->get('m_number'),
        //     'personal_email' => $request->get('p_email'),
        //     'birthday' => $request->get('bday'),
        //     'SIN_SSN' => $request->get('ssn_sin'),
        //     'emergency_name' => $request->get('e_name'),
        //     'relationship' => $request->get('relationship'),
        //     'emergency_address' => $request->get('e_address'),
        //     'emergency_number' => $request->get('e_number'),
        //     'job_id' => $request->get('jjob_title'),
        //     'job_description' => $request->get('info_area'),
        //     'job_level_id' => $request->get('job_level'),
        //     'job_position_id' => $request->get('job_position'),
        //     'date_hired' => $request->get('d_hired'),
        //     'date_terminated' => $request->get('d_terminated'),
        //     'SSS_no' => $request->get('sss_n'),
        //     'philhealth_no' => $request->get('philhealth_n'),
        //     'pagibig_no' => $request->get('pagibig_n'),
        //     'TIN_no' => $request->get('tin_n'),
        //     'NBI_no' => $request->get('nbi_n'),
        //     'diploma' => $request->get('diploma'),
        //     'medical' => $request->get('medical'),
        //     'TOR' => $request->get('TOR'),
        //     'birth_cert' => $request->get('birth_cert'),
        //     'brgy_clearance' => $request->get('brgy'),
        //     'cedula' => $request->get('cedula')
        // ]);

        $proto->save();

         $files_diploma->move('documents/employee_documents/diplomas', $filename_diploma);
         $files_tor->move('documents/employee_documents/TOR', $filename_tor);
         $files_bclearance->move('documents/employee_documents/brgy_clearance', $filename_bclearance);
         $files_mcert->move('documents/employee_documents/medical_certificate', $filename_mcert);
         $files_bcert->move('documents/employee_documents/birth_certificate', $filename_bcert);
         $files_cedula->move('documents/employee_documents/cedula', $filename_cedula);

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

    public function schedule_index(){

        $sched_employee = DB::table('prototype__employees')->get();
        $sched_list = DB::table('schedules')
            ->join('prototype__employees', 'prototype__employees.employee_id', '=', 'schedules.employee_id')
            ->join('shifts', 'shifts.id', '=', 'schedules.shift_id')
            ->select('schedules.*', 'prototype__employees.firstname', 'prototype__employees.lastname', 'prototype__employees.middle_name', 'prototype__employees.employee_id', 'shifts.name')
            ->get();
        $shifts = Shift::all();
            
        return view('admin.schedule', compact('sched_employee', 'sched_list', 'shifts'));
    }

    public function schedule_create(Request $request){
        // return $request;
        // dd($request->memoemp_search1);
       if(in_array("0001", $request->memoemp_search))
       {
          // $users = Role::with('users')->where('name', 'Employee')->get();
            $users = User::with('roles')->where('role', '2')->get();

        foreach($users as $user){
                    
                    $scheds = DB::table('schedules')->where('employee_id', $user->employee_id)->first();
                   
                
                    if(!$scheds){
                        $schedule = new Schedule;
                        $details = $request;

                        $user->notify(new AssignSchedule($details));

                        $schedule->employee_id = $user->employee_id;
                        $schedule->shift_id = $request->shift_sel;
                        $schedule->day_from = $request->sched_day_from;
                        $schedule->day_to = $request->sched_day_to;
                        $schedule->restday = $request->sched_rest_day;
                        $schedule->task = $request->sched_task;
                        $schedule->comment = $request->sched_comment;
                        // $schedule->duration = $request->sched_duration;
                        // $from = Carbon::parse($request->sched_from);
                        // $to = Carbon::parse($request->sched_to);
                        // $new_to = $to->addDays(1);
                        // // $from = Carbon::parse('2019-09-16');
                        // // $to = Carbon::parse('2019-09-26');
                        
                        // $dt = $from->diffInDays($new_to). " day/s";
                        
                        // $schedule->duration = $dt;
                        $schedule->other = $request->sched_other;
                        $schedule->save();
                    }
                   
                   
                }

       }
       else{
          foreach($request->memoemp_search as $ids){
                      $users = User::where(array('employee_id' => $ids))->first();
                      // dd($users);

                      $schedule = new Schedule;
                      $details = $request;

                      $users->notify(new AssignSchedule($details));

                      $schedule->employee_id = $ids;
                      $schedule->shift_id = $request->shift_sel;
                      $schedule->day_from = $request->sched_day_from;
                      $schedule->day_to = $request->sched_day_to;
                      $schedule->restday = $request->sched_rest_day;
                      $schedule->task = $request->sched_task;
                      $schedule->comment = $request->sched_comment;
                      // $schedule->duration = $request->sched_duration;
                      // $from = Carbon::parse($request->sched_date_from);
                      // $to = Carbon::parse($request->sched_date_to);
                      // $new_to = $to->addDays(1);
                      // // $from = Carbon::parse('2019-09-16');
                      // // $to = Carbon::parse('2019-09-26');
                      
                      // $dt = $from->diffInDays($new_to). " day/s";
                      
                      // $schedule->duration = $dt;
                      $schedule->other = $request->sched_other;
                      $schedule->save();
                  }

       }
        


        // $schedule = new Schedule([
        //     'employee_id' => $request->get('memoemp_search'),
        //     'date_from' => $request->get('sched_date_from'),
        //     'date_to' => $request->get('sched_date_to'),
        //     'task' => $request->get('sched_task'),
        //     'comment' => $request->get('sched_comment'),
        //     'duration' => $request->get('sched_duration'),
        //     'other' => $request->get('sched_other')
        // ]);

        // $schedule->save();



        return redirect()->route('schedule.index');
    }

    public function schedule_delete($id){

         DB::table('schedules')->where('id', $id)->delete();

        return redirect()->route('schedule.index');
    }

    public function leave_types(){

        $leave_index = DB::table('leave_types')->get();

        return view('admin.leave_types', compact('leave_index'));
    }

    public function holidays_index(){
        $holiday_type = DB::table('holiday_types')
            ->get();

        $holidays = DB::table('holidays')
            ->join('holiday_types', 'holiday_types.id', '=', 'holidays.holiday_type_id')
            ->select('holidays.*', 'holiday_types.holiday_type')
            ->get();

        return view ('admin.holiday', compact('holiday_type', 'holidays'));
    }

    public function holidays_create(Request $request){
        $holiday = new Holiday([
            'holiday_name' => $request->get('holiday'),
            'date' => $request->get('holiday_date'),
            'holiday_type_id' => $request->get('holiday_type')
        ]);

        $holiday->save();

        return redirect()->route('holidays.index');
    }

    public function leave_type_create(Request $request){
        $leave_type = new Leave_type([
            'leave_type' => $request->get('leave_type'),
            'description' => $request->get('leaveType_desc')
        ]);

        $leave_type->save();

        return redirect()->route('leave_types.index');

    }

    public function leave_type_delete($id){
        DB::table('leave_types')->where('id', $id)->delete();

        return redirect()->route('leave_types.index');
    }

     public function payroll_index(){

        $employees = Prototype_Employee::all();

        $payrolls = DB::table('payrolls')
            ->join('prototype__employees', 'prototype__employees.employee_id', '=', 'payrolls.employee_id')
            ->join('departments', 'departments.id', '=', 'prototype__employees.department_id')
            ->select('prototype__employees.*', 'departments.*', 'payrolls.*')
            ->get();

        return view ('admin.payroll', compact('employees','payrolls'));
    }

    public function leave_index(){

        $leave = DB::table('leaves')
            ->join('leave_types', 'leave_types.id', '=', 'leaves.leave_id')
            ->select('leaves.*', 'leave_types.leave_type')
            ->get();

        return view ('admin.leaves', compact('leave'));
    }

    public function leave_edit(Request $request){

        $user = User::where('employee_id',$request->txt_vl_empid)->first();
  
        $details = $request;

        $leave_edit = Leave::find($request->vl_id);
        $leave_edit->firstname = $request->txt_vl_fname;
        $leave_edit->middle_name = $request->txt_vl_mname;
        $leave_edit->lastname = $request->txt_vl_lname;
        $leave_edit->emp_id = $request->txt_vl_empid;
        $leave_edit->date = $request->txt_vl_date;
        $leave_edit->leave_id = $request->txt_vl_leave_type;
        $leave_edit->date_from = $request->txt_vl_datefrom;
        $leave_edit->date_to = $request->txt_vl_dateto;
        $leave_edit->reason = $request->txt_vl_reason;
        $leave_edit->leave_status = $request->vl_status;

        $user->notify(new RequestLeave($details));

        $leave_edit->save();

        return redirect()->route('admin.employee_leave'); 
    }

    public function attendance_index(){

        // $columns1 = [
        //     'date_from AS start',
        //     'date_to AS end',
        //     'id AS id',
        //     'emp_id AS title' 
        // ];

        // $leave = DB::table('leaves')
        //     ->join('leave_types', 'leave_types.id', '=', 'leaves.leave_id')
        //     ->select('leaves.*', 'leave_types.leave_type')
        //     ->get();

        // $leaves = Leave::with('type')->get($columns1);
        // $leave1 = $leaves->toJson();
        // // dd($leave);

        // $employees = DB::table('prototype__employees')->get();
        // $columns = [
        //     'date AS start',
        //     'date AS end',
        //     'id1 AS id',
        //     'employee_id AS title' 
        // ];
        // $timesheets = TimeSheet::with('employee')->get($columns);
        // $timesheet = $timesheets->toJson();
        
        
        // return view('admin.attendance', compact('timesheet', 'employees', 'leave1'));

      $timesheet = DB::table('timesheets')
            ->join('prototype__employees', 'prototype__employees.employee_id', '=', 'timesheets.employee_id')
            ->select('timesheets.*', 'prototype__employees.*')
            ->get();

        $leave = DB::table('leaves')
            ->join('leave_types', 'leave_types.id', '=', 'leaves.leave_id')
            ->select('leaves.*', 'leave_types.leave_type')
            ->get();

        $holidays = DB::table('holidays')
            ->join('holiday_types', 'holiday_types.id', '=', 'holidays.holiday_type_id')
            ->select('holidays.*', 'holiday_types.holiday_type')
            ->get();

         $absents = DB::table('absents')
            ->join('prototype__employees', 'prototype__employees.employee_id', '=', 'absents.employee_id')
            ->select('absents.*', 'prototype__employees.*')
            ->get();

        $employees = Prototype_Employee::all();

        return view ('admin.attendance', compact('timesheet', 'leave','employees','holidays','absents'));
        
    }

    public function memo_index(){

        $memo_employee = DB::table('prototype__employees')->get();
        // $memo_user = DB::table('users')->get();
        // $memo_user = User::with('roles')->where('role', '2')->get();
        $memo_user = DB::table('users')
            ->join('prototype__employees', 'users.employee_id', '=', 'prototype__employees.employee_id')
            ->select('users.*', 'prototype__employees.firstname', 'prototype__employees.lastname')
            ->where('users.role', '=', '2')
            ->get();

        $memos = DB::table('memos')->get();

        return view('admin.memo', compact('memo_employee', 'memos', 'memo_user'));
    }

    public function memo_create(Request $request){
        
        if($files = $request->file('file')){
            $filename = $files->getClientOriginalName();

            if($files->move('documents/memos', $filename)){
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
    
    public function memo_edit(Request $request){
        $memo_edit = Memo::find($request->edit_memo_id);
        $memo_edit->memo = $request->edit_memo_title;
        $memo_edit->attachment = $request->edit_memo_file;
        $memo_edit->subject = $request->edit_memo_subject;
        $memo_edit->memo_date = $request->edit_memo_date;
        $memo_edit->save();

        return redirect()->route('admin.memo'); 
    }

    public function memo_delete($id){

        DB::table('memos')->where('id', $id)->delete();

        return redirect()->route('admin.memo');
    }

    public function memoSent(Request $request){
      
        // $recipient = $request->memoemp_search;
        if(in_array("0001", $request->memoemp_search))
        {
           // $users = Role::with('users')->where('name', 'Employee')->get();
            $users = User::with('roles')->where('role', '2')->get();
           foreach ($users as $user) {
               $details = $request;

               $user->notify(new SendMemo($details));
           }
            
        }
        else{
            foreach ($request->memoemp_search as $ids) {
                $users = User::where(array('employee_id' => $ids))->first();
            

                $details = $request;

                $users->notify(new SendMemo($details));
            }
        }
        
        // $users = User::with('roles')->get();
        // $users = User::roles('employee')->get(); 
        // $users = User::where('id', $recipient)->get();
        // dd($users);
        // $users = User::with('roles')->where('role','2')->get();
        // dd($users);

        
        return redirect()->back();
    }

    // public function ajaxShowEmployee(Request $request){

    //     // $employees = User::where('name','LIKE','%'.$request->q.'%')->paginate(10);


    //     return array('status' => 'OK', 'result' => $employees->toArray(), 'suggestions' => $employees);
    // }


    public function attendLoad(Request $request){

         
         $timesheet = DB::table('timesheets')
             ->join('prototype__employees', 'prototype__employees.employee_id', '=', 'timesheets.employee_id')
             ->select('timesheets.*', 'prototype__employees.*')
             ->where('timesheets.employee_id', '=', $request->emp_sel)
             ->get();

         $leave = DB::table('leaves')
             ->join('leave_types', 'leave_types.id', '=', 'leaves.leave_id')
             ->select('leaves.*', 'leave_types.leave_type')
             ->where('leaves.emp_id', '=', $request->emp_sel)
             ->get();

        $holidays = DB::table('holidays')
            ->join('holiday_types', 'holiday_types.id', '=', 'holidays.holiday_type_id')
            ->select('holidays.*', 'holiday_types.holiday_type')
            ->get();

         $absents = DB::table('absents')
            ->join('prototype__employees', 'prototype__employees.employee_id', '=', 'absents.employee_id')
            ->select('absents.*', 'prototype__employees.*')
            ->where('absents.employee_id', '=', $request->emp_sel)
            ->get();

         $emp_name = Prototype_Employee::where('employee_id', $request->emp_sel)->get();

         $employees = Prototype_Employee::all();

         return view ('admin.attendance', compact('timesheet', 'leave','employees', 'emp_name', 'holidays','absents'));
         

     }

     public function attendance_absent(Request $request){
        $absents = new Absent([
            'employee_id' => $request->get('a_emp_id'),
            'date' => $request->get('txt_a_date'),
            'unpaid' => $request->get('unpaid_absent'),
            'charge_SIL' => $request->get('charge_to_SIL')
        ]);

        $absents->save();

        return redirect()->route('attendance.index');
     }

     public function ajaxPayroll(Request $request)
     {


        $daysWorked = DB::table('timesheets')
                                ->where('employee_id', $request->id)
                                ->distinct('date')
                                ->whereBetween('date', array($request->d_from, $request->d_to))
                                ->where('night_differential', '=', '0')
                                ->count('date');

        $absents = Absent::where('employee_id', $request->id)
                                ->whereBetween('date', array($request->d_from, $request->d_to))
                                ->count();

        $holidays = Holiday::whereBetween('date', array($request->d_from, $request->d_to))
                                ->where('holiday_type_id', '=', '1')
                                ->count();               

        $unpaid = Absent::where('employee_id', $request->id)
                                ->whereBetween('date', array($request->d_from, $request->d_to))
                                ->where('unpaid', '=', 'yes')
                                ->count();
        $allowances = Prototype_Employee::where('employee_id', $request->id)
                                ->first('allowance');  



        $night_differential = TimeSheet::where('employee_id', $request->id)
                                ->distinct('date')
                                ->whereBetween('date', array($request->d_from, $request->d_to))
                                ->where('night_differential', '=', '1')
                                ->sum('time_duration');
    // SELECT * FROM `timesheets` join holidays on holidays.date = timesheets.date 
    // JOIN holiday_types on holiday_types.id = holidays.holiday_type_id  WHERE timesheets.employee_id = 247-01
    
        // $holiday_ot = DB::table('timesheets')
        //                         ->where('employee_id', '=', $request->id)
        //                         ->join('holidays', 'holidays.date', '=', 'timesheets.date')
        //                         ->get();
        // $holiday_ot = DB::table('timesheets')
        //             ->join('holidays', 'holidays.date', '=', 'timesheets.date')
        //             ->join('holiday_types', 'holiday_types.id', '=', 'holidays.holiday_type_id')
        //             ->where('holiday_types.holiday_type', '=', 'Legal Holiday')
        //             ->where('timesheets.employee_id', '=', $request->id)
        //             ->whereBetween('timesheets.date', array($request->d_from, $request->d_to))
        //             ->sum('timesheets.overtime_duration');


        // $holiday_ot = DB::table('timesheets')
        //                         ->where('employee_id', '=', $request->id)
        //                         ->whereBetween('date', array($request->d_from, $request->d_to))
        //                         ->join('holidays', 'holidays.date', '=', 'timesheets.date')
        //                         ->join('holiday_types', 'holiday_types.id', '=', 'holidays.holiday_type_id')
        //                         ->select('timesheets.*')
        //                         ->where('holiday_types.holiday_type', '=', 'Legal Holiday')
        //                         ->get();


        $schedule = Schedule::where('employee_id', $request->id)->first();

        $restday = $schedule->restday;

        $legal_holidays = Holiday::whereBetween('date', array($request->d_from, $request->d_to))
                                ->where('holiday_type_id', '=', '1')
                                ->pluck('date')->toArray();         

        $special_holidays = Holiday::whereBetween('date', array($request->d_from, $request->d_to))
                                ->where('holiday_type_id', '=', '2')
                                ->pluck('date')->toArray(); 
                                // Foo::where('b', 15)->pluck('a')->toArray();      
        // $overtimes = TimeSheet::where('employee_id', $request->id)
        //                         ->whereBetween('date', array($request->d_from, $request->d_to))
        //                         ->sum('overtime_duration');


        $sunday_rest_ot = TimeSheet::where('employee_id', $request->id)
                                ->whereBetween('date', array($request->d_from, $request->d_to))
                                ->get();

        

        $rest_ot_duration = 0.00;
        $regular_ot_duration = 0.00;
        $legal_holiday_ot_duration = 0.00;
        $special_holiday_ot_duration = 0.00;
        foreach($sunday_rest_ot as $rest_ot){
            $date = strtotime($rest_ot->date);
            $ndate = date("Y-m-d", $date);
            $day = date('l', $date);

            // return Response()->json(['tet' => $ndate]);

            if($day == $restday){
                $rest_ot_duration += $rest_ot->overtime_duration;
            }
            else if(in_array($ndate, $legal_holidays)){
               $legal_holiday_ot_duration += $rest_ot->overtime_duration;
            }            
            else if(in_array($ndate, $special_holidays)){
               $special_holiday_ot_duration += $rest_ot->overtime_duration;
            }
            else{
                $regular_ot_duration += $rest_ot->overtime_duration;
            }
        }


        $shift = DB::table('schedules')
            ->join('shifts', 'shifts.id', '=', 'schedules.shift_id')
            ->select('shifts.*', 'schedules.*')
            ->where('schedules.employee_id', '=', $request->id)
            ->first();

        $shift_start = $shift->shift_start;
        $shift_start_str = strtotime($shift->shift_start);
        $shift_end = $shift->shift_end;
        $shift_end_str = strtotime($shift->shift_end);
        $break_end_str = strtotime($shift->break_end);
        $break_start_str = strtotime($shift->break_start);
        $break_end = $shift->break_end;
        $break_start = $shift->break_start;
        $grace_period = date("H:i", strtotime('+15 minutes', $shift_start_str));
        $late_start = date("H:i", strtotime('+15 minutes', $shift_start_str));
        $late_start1 = date("H:i", strtotime('+1 minutes', $break_end_str));

        $late = TimeSheet::where('employee_id', $request->id)
                                ->whereBetween('date', array($request->d_from, $request->d_to))
                                ->where('time_to', '!=', null)
                                ->where(function ($query) use ($break_start, $shift_end, $late_start, $late_start1) {
                                               $query->whereBetween('time_from', array($late_start, $break_start))
                                                     ->orWhereBetween('time_from', array($late_start1, $shift_end));
                                           })
                                ->get();       

        // $late = TimeSheet::where('employee_id', $request->id)
        //                         ->whereBetween('date', array($request->d_from, $request->d_to))
        //                         ->where('time_to', '!=', null)
        //                         ->where(function ($query) {
        //                                        $query->whereBetween('time_from', array('08:16:00', '12:00:00'))
        //                                              ->orWhereBetween('time_from', array('13:01:00', '17:00:00'));
        //                                    })
        //                         ->get();          

        // return Response()->json(['late'=>$late]);

        $underTime = TimeSheet::where('employee_id', $request->id)
                                ->whereBetween('date', array($request->d_from, $request->d_to))
                                ->where('time_to', '!=', null)
                                ->where(function ($query) use ($shift_start, $break_start, $break_end, $shift_end ) {
                                               $query->whereBetween('time_to', array($shift_start, $break_start))
                                                     ->orWhereBetween('time_to', array($break_end, $shift_end));
                                           })
                                ->get();             

        // $total_late = 0.00;
        // foreach($late as $la){
        //     $dur = $la->time_duration;

        //     $duration = 8.00 - $dur;
        //     $total_late += $duration;
        // }
        // $time_from = new Carbon('08:00:00'); 

        $late_end1 = date("H:i", strtotime('-1 minutes', $shift_end_str));
        // $late_end1 = date("H:i", strtotime('-1 minutes', $break_end));
        $late_end = date("H:i", strtotime('-1 minutes', $break_start_str));
      // if to is less than shif end 
      //   get diff between 
                // return Response()->json(['late'=>$late]);
 
       $total_late = 0.00;
        foreach($late as $la){
            if($la->time_to > $break_end){
                if($la->time_from >= $break_end){
                    $duration = Carbon::parse($la->time_from)->diff(Carbon::parse($break_end))->format('%h:%I');
                    $xplode = explode(":", $duration);
                    $decDuration = $xplode[0] + ($xplode[1]/60);

                    $total_late += $decDuration;
                    // return Response()->json(['late'=> $duration]);
                }

               // $duration = Carbon::parse($la->time_from)->diff(Carbon::parse($la->time_to))->format('%h:%I');
               // $xplode = explode(":", $duration); 4.12
               // $decDuration = $xplode[0] + ($xplode[1]/60);

               // $total_late += $decDuration;
               // return Response()->json(['late'=>$la->time_from]);
            }            

            else if($la->time_to < $late_end){

                $duration = Carbon::parse($grace_period)->diff(Carbon::parse($la->time_from))->format('%h:%I');
                $xplode = explode(":", $duration);
                $decDuration = $xplode[0] + ($xplode[1]/60);

                $total_late += $decDuration;
                // return Response()->json(['late'=>$duration]);


             // if to > break_end
             //    2 > 1
             //    from to  
            }
            else {
             
                $duration = Carbon::parse($grace_period)->diff(Carbon::parse($la->time_from))->format('%h:%I');
                $xplode = explode(":", $duration);
                $decDuration = $xplode[0] + ($xplode[1]/60);

                $total_late += $decDuration;

                // $dur = $la->time_duration;

                // $duration = 4.00 - $dur;
                // $total_late += $duration;
                // return Response()->json(['late'=>$duration]);
            }
           
        }        

        $total_undertime = 0.00;
        foreach($underTime as $un){
            if($un->time_to < $break_start){

                $duration = Carbon::parse($un->time_to)->diff(Carbon::parse($break_start))->format('%h:%I');
                $xplode = explode(":", $duration);
                $decDuration = $xplode[0] + ($xplode[1]/60);

                $total_undertime += $decDuration;
               
                // return Response()->json(['undertime'=>$un->time_to]);
            }

            else if($un->time_to < $shift_end)

                $duration = Carbon::parse($un->time_to)->diff(Carbon::parse($shift_end))->format('%h:%I');
                $xplode = explode(":", $duration);
                $decDuration = $xplode[0] + ($xplode[1]/60);

                $total_undertime += $decDuration;

                // return Response()->json(['undertime'=> $total_undertime]);

        }


         // 'holiday_ot' => $holiday_ot,
         return Response()->json(['daysWorked' => $daysWorked, 'absents' => $absents, 'unpaid' => $unpaid,
                        'allowances' => $allowances, 'total_late' => $total_late, 'rest_ot_duration' => $rest_ot_duration,
                        'total_undertime' => $total_undertime, 'holidays' => $holidays, 'regular_ot_duration' => $regular_ot_duration, 
                        'night_differential' => $night_differential,  
                        'special_holiday_ot_duration'=> $special_holiday_ot_duration, 'legal_holiday_ot_duration' => $legal_holiday_ot_duration ]);
        
     }


     public function generatePayroll(Request $request){

        $payroll = new Payroll;

        $payroll->employee_id = $request->p_empid;
        $payroll->no_days_worked = $request->p_no_days_worked;
        $payroll->daily_rate = $request->p_daily_rate;
        $payroll->rate_per_hour = $request->p_rate_hour;
        $payroll->basic_pay =  $request->p_basic_pay;
        $payroll->total_absences = $request->p_total_absences;
        $payroll->unpaid_absences = $request->p_unpaid_absences;
        $payroll->charged_to_SIL = $request->p_charge_to_SIL;
        $payroll->amount_absences = $request->p_amount_absences;
        $payroll->allowance = $request->p_allowance;
        $payroll->adjustment_incentives = $request->p_adjustment_incentive;
        $payroll->no_legal_holidays = $request->p_no_holidays;
        $payroll->amount_holidays = $request->p_amount_holidays;
        $payroll->regular_OT_hours = $request->p_reg_OT_hours;
        $payroll->regular_OT_amount = $request->p_reg_OT_amount;
        $payroll->restday_OT_hours = $request->p_rest_OT_hours;
        $payroll->restday_OT_amount = $request->p_rest_OT_amount;
        $payroll->legal_holiday_OT_hours = $request->p_lholiday_hours;
        $payroll->legal_holiday_OT_amount = $request->p_lholiday_amount;
        $payroll->special_holiday_OT_hours = $request->p_sholiday_hours;
        $payroll->special_holiday_OT_amount = $request->p_sholiday_amount;
        $payroll->no_hours_rendered = $request->p_no_rendered;
        $payroll->amount_night_diffential = $request->p_amount_night;
        $payroll->no_hours_undertime = $request->p_no_undertime;
        $payroll->no_hours_late = $request->p_no_late;
        $payroll->gross_pay = $request->p_gross_pay;
        $payroll->SSS_payroll = $request->p_sss;
        $payroll->PHIC_payroll = $request->p_phic;
        $payroll->HDMF_payroll = $request->p_hdmf;
        $payroll->total_deduction_benefits = $request->p_total_deduction_benefits;
        $payroll->SSS_loan = $request->p_sss_loan;
        $payroll->company_loan = $request->p_company_loan;
        $payroll->HDMF_loan = $request->p_hdmf_loan;
        $payroll->uniform = $request->p_uniform;
        $payroll->total_deduction_loan = $request->p_total_deduction_loan;
        $payroll->tax = $request->p_tax;
        $payroll->net_pay = $request->p_net_pay;

        $payroll->save();
        
        return redirect()->back();
     }

    public function overtime(){

        $overtimes = DB::table('overtimes')
            ->join('prototype__employees', 'prototype__employees.employee_id', '=', 'overtimes.employee_id')
            ->select('overtimes.*', 'prototype__employees.*')
            ->get();

        return view('admin.overtime', compact('overtimes'));
    }    

    public function ajaxShowOvertime(Request $request){

        $overtimes = DB::table('overtimes')
            ->join('prototype__employees', 'prototype__employees.employee_id', '=', 'overtimes.employee_id')
            ->select('overtimes.*', 'prototype__employees.*')
            ->where('overtimes.otime_id', '=', $request->id)
            ->first();

         return Response()->json(['overtimes' => $overtimes ]);

    }

    public function overtimeEdit(Request $request){

        $overtime = Overtime::where('otime_id', $request->hdn_id)->first();
        
        $overtime->status = $request->eo_status;

        $overtime->save();

        return redirect()->back();

    }

    public function shift_index(){

        $shifts = Shift::all();

        return view('admin.shift', compact('shifts'));
    }
    public function shift_create(Request $request){

        $shift = new Shift;
        $shift->name = $request->shift_name;
        $shift->shift_start = $request->shift_start;
        $shift->shift_end = $request->shift_end;
        $shift->night_diff = $request->night_diff;
        $shift->break_start = $request->lunch_rest_start;
        $shift->break_end = $request->lunch_rest_end;

        $shift->save();

        return redirect()->back();
    }


}
