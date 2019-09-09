<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Leave_type;

use App\Leave;

use Auth;
use DB;

class EmployeeController extends Controller
{
	public function __construct()
	    {
	        $this->middleware('auth');
	        $this->middleware('role:Employee');
	    }

    public function index()
        {
            return view('employee.dashboard');
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
        $leave_type = Leave_type::all();

        $leave = DB::table('leaves')
            ->join('leave_types', 'leave_types.id', '=', 'leaves.leave_id')
            ->select('leaves.*', 'leave_types.leave_type')
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
}
