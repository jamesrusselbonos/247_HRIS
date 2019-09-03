<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

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
}
