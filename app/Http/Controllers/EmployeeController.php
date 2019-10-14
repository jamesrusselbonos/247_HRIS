<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Leave_type;

use App\Leave;

use App\TimeSheet;
use App\Overtime;

use Auth;
use DB;
use Carbon\Carbon;

class EmployeeController extends Controller
{
	public function __construct()
	    {
	        $this->middleware('auth');
	        $this->middleware('role:Employee');
	    }

    public function index()
        {
           $user = Auth::user()->employee_id;
           $timesheet = TimeSheet::all();

           $sum_of_time_duration = DB::table('timesheets')
               ->join('users', 'users.employee_id', '=', 'timesheets.employee_id')
               ->select('users.*', 'timesheets.time_duration')
               ->where('timesheets.employee_id', '=', $user)
               ->sum('time_duration');

            $days_absent = DB::table('absents')
                ->join('users','users.employee_id', '=', 'absents.employee_id')
                ->join('prototype__employees','prototype__employees.employee_id', '=', 'absents.employee_id')
                ->select('users.*', 'absents.*','prototype__employees.*')
                ->where('absents.employee_id', '=', $user)
                ->get();

             $leave = DB::table('leaves')
                ->join('users', 'users.employee_id', '=', 'leaves.emp_id')
                ->join('prototype__employees','prototype__employees.employee_id', '=', 'leaves.emp_id')
                ->join('leave_types', 'leave_types.id', '=', 'leaves.leave_id')
                ->select('leaves.*', 'leave_types.leave_type','prototype__employees.*','users.*')
                ->where('leaves.emp_id', '=', $user)
                ->get();

            $timeSheets =  DB::table('timesheets')
                 ->select('*')
                 ->where('employee_id', $user)
                 ->get();

            $holidays = DB::table('holidays')
                ->join('holiday_types', 'holiday_types.id', '=', 'holidays.holiday_type_id')
                ->select('holidays.*', 'holiday_types.holiday_type')
                ->get();

            $info = DB::table('prototype__employees')
                ->join('users', 'users.employee_id', '=', 'prototype__employees.employee_id')
                ->select('users.*', 'prototype__employees.*')
                ->where('prototype__employees.employee_id', '=', $user)
                ->get();

            $sched_list = DB::table('schedules')
            ->join('prototype__employees', 'prototype__employees.employee_id', '=', 'schedules.employee_id')
            ->join('users', 'users.employee_id', '=', 'prototype__employees.employee_id')
            ->select('schedules.*', 'prototype__employees.firstname', 'prototype__employees.lastname', 'prototype__employees.middle_name', 'prototype__employees.employee_id')
            ->where('schedules.employee_id', '=', $user)
            ->get();

           return view('employee.employee_index', compact('sum_of_time_duration', 'days_absent', 'timeSheets', 'holidays','leave', 'sched_list'));
        }


    public function markAllRead(){

        Auth::user()->unreadNotifications->markAsRead();
        return redirect()->back();
    }    

    public function markRead(Request $request){

        $user = Auth::user();
        $notification = $user->notifications()->where('id', $request->notif_id)->first();
        if($notification){
            $notification->markAsRead();
        }

    }

    public function employee_memo(){

        return view('employee.employee_memo');
    }

    public function leave_index(){

        $user = Auth::user()->employee_id;
        $leave_type = Leave_type::all();

        $leave = DB::table('leaves')
            ->join('leave_types', 'leave_types.id', '=', 'leaves.leave_id')
            ->join('users', 'users.employee_id', '=', 'leaves.emp_id')
            ->select('leaves.*', 'leave_types.leave_type', 'users.employee_id')
            ->where('leaves.emp_id', '=', $user)
            ->get();


         return view('employee.employee_leave', compact('leave_type', 'leave'));

        // return view ('employee.employee_leave');
    }

    public function ajaxEditLeave(Request $request, $id){

        $leave = Leave::find($id);

        return Response()->json(['leave' => $leave]);
    }    


    public function ajaxViewLeave(Request $request, $id){
 
        $leave = Leave::find($id);
        $leave_type = Leave_type::where('id', $request->type)->first();

        return Response()->json(['leave' => $leave, 'leave_type' => $leave_type]);
    }

    public function leave_update(Request $request, $id){
   
        $leave = Leave::find($id);

        $leave->date = $request->date;
        $leave->leave_id = $request->leave_type;
        $leave->date_from = $request->leave_from;
        $leave->date_to = $request->leave_to;
        $leave->reason   = $request->leave_reason;

        $leave->save();

        return redirect()->back();
    }

    public function request_leave_create(Request $request){

        $leave_save = new Leave([
            'firstname' => $request->get('leave_fname'),
            'middle_name' => $request->get('leave_mname'),
            'lastname' => $request->get('leave_lname'),
            'emp_id' => $request->get('leave_empid'),
            'date' => $request->get('leave_date'),
            'leave_id' => $request->get('leave_type'),
            'date_from' => $request->get('leave_datefrom'),
            'date_to' => $request->get('leave_dateto'),
            'reason' => $request->get('leave_reason')
        ]);

        $leave_save->save();

        return redirect()->route('employee.employee_leave');
    }

    public function cancelLeave(Request $request, $id){

        $leave = Leave::find($id);
        $leave->leave_status = 'Cancelled';
        $leave->save();

        return redirect()->back();
    }    

    public function requestOvertime(Request $request){

        $overtime = new Overtime;

        $overtime->employee_id = $request->overtime_empid;
        $overtime->date = $request->overtime_date;
        $overtime->time_from = $request->time_from;
        $overtime->time_to = $request->time_to;
        $overtime->duration = $request->duration;
        $overtime->reason = $request->overtime_reason;

        // $overtime = new Overtime([
        //     'employee_id' => $request->get('overtime_empid'),
        //     'date' => $request->get('overtime_date'),
        //     'time_from' => $request->get('time_from'),
        //     'time_to' => $request->get('time_to'),
        //     'duration' => $request->get('duration'),
        //     'reason' => $request->get('overtime_reason')
        //     // 'status' => $request->get('leave_date')
        // ]);

        $overtime->save();

        return redirect()->route('employee.overtime');
    }    


    public function overtime(){
        $overtime = Overtime::all();

        return view('employee.employee_overtime', compact('overtime'));
    }

    public function ajaxOvertimeView(Request $request, $id){

        $overtime = Overtime::where('otime_id', $id)->first();

        return Response()->json(['overtime' => $overtime]);
    }    

    public function ajaxOvertimeEdit(Request $request, $id){

        $overtime = Overtime::where('otime_id', $id)->first();

        return Response()->json(['overtime' => $overtime]);
    }

    public function ajaxRequestOvertimeUpdate(Request $request, $id){


        $overtime = Overtime::where('otime_id', $id)->first();

        $overtime->date = $request->date;
        $overtime->time_from = $request->time_from;
        $overtime->time_to = $request->time_to;
        $overtime->duration = $request->duration;
        $overtime->reason = $request->ot_reason;

        $overtime->save();

        return redirect()->back();
    }

    public function requestOvertimeCancel(Request $request, $id){

        $overtime = Overtime::where('otime_id', $id)->first();

        $overtime->status = 'Cancelled';

        $overtime->save();

        return redirect()->back();
    }


}
