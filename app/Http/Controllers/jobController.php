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
    public function edit(Request $request){

        $job_id = Job::find($request->mjob_id);
        $job_id->job_title = $request->mjob_title;
        $job_id->description = $request->mjob_desc;
       $job_id->save();

        return redirect()->route('admin.job_title'); 
    }
}
