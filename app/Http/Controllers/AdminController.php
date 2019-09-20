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

use App\Prototype_Employee;
use App\Schedule;
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

            return view('admin.admin_index', compact('emp_count', 'dept_count', 'TimeSheet_report', 'memo_report', 'sched_report', 'leave_count', 'list', 'leave_report','timesheet'));
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
            $proto->diploma = $request->get('diploma');
            $proto->medical = $request->get('medical');
            $proto->TOR = $request->get('TOR');
            $proto->birth_cert = $request->get('birth_cert');
            $proto->brgy_clearance = $request->get('brgy');
            $proto->cedula = $request->get('cedula');

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
            ->select('schedules.*', 'prototype__employees.firstname', 'prototype__employees.lastname', 'prototype__employees.middle_name', 'prototype__employees.employee_id')
            ->get();
            
        return view('admin.schedule', compact('sched_employee', 'sched_list'));
    }

    public function schedule_create(Request $request){
        // dd($request->memoemp_search1);
       
        foreach($request->memoemp_search as $ids){
            $users = User::where(array('employee_id' => $ids))->first();
            // dd($users);

            $schedule = new Schedule;
            $details = $request;

            $users->notify(new AssignSchedule($details));

            $schedule->employee_id = $ids;
            $schedule->date_from = $request->sched_date_from;
            $schedule->date_to = $request->sched_date_to;
            $schedule->task = $request->sched_task;
            $schedule->comment = $request->sched_comment;
            // $schedule->duration = $request->sched_duration;
            $from = Carbon::parse($request->sched_date_from);
            $to = Carbon::parse($request->sched_date_to);
            $new_to = $to->addDays(1);
            // $from = Carbon::parse('2019-09-16');
            // $to = Carbon::parse('2019-09-26');
            
            $dt = $from->diffInDays($new_to). " day/s";
            
            $schedule->duration = $dt;
            $schedule->other = $request->sched_other;
            $schedule->save();
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

        $schedule->save();



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

        return view ('admin.payroll', compact('employees'));
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

}
