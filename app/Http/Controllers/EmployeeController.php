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
                ->where('absents.employee_id', '=', $user)
                ->get();

           return view('employee.employee_index', compact('sum_of_time_duration', 'days_absent'));
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
            ->select('leaves.*', 'leave_types.leave_type', 'users.*')
            ->where('leaves.emp_id', '=', $user)
            ->get();

         return view('employee.employee_leave', compact('leave_type', 'leave'));

        // return view ('employee.employee_leave');
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
}
