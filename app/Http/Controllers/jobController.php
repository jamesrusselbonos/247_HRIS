<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class jobController extends Controller
{
    public function index(){
    	$jobs = Job::all();

    	return view('admin.job_title', compact('jobs'));
    }
    public function create(Request $request){
    	
    	$job = new Job([
    		'job_title' => $request->get('job_title'),
    		'description' => $request->get('job_desc')
    	]);

    	$job->save();

    	return redirect()->route('admin.job_title'); 
    }
}
