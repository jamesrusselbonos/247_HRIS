<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
