<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Status;

use DB;

class statusController extends Controller
{
     public function index(){
    	$status = Status::all();

    	return view('admin.job_status', compact('status'));
    }
    public function create(Request $request){
    	
    	$stat = new Status([
    		'job_status' => $request->get('status_title'),
    		'description' => $request->get('status_desc')
    	]);

    	$stat->save();

    	return redirect()->route('admin.job_status'); 
    }
    public function edit(Request $request){

        $stat_id = Status::find($request->mstatus_id);
        $stat_id->job_status = $request->mstatus_title;
        $stat_id->description = $request->mstatus_desc;
       $stat_id->save();

        return redirect()->route('admin.job_status'); 
    }

    public function delete($id){
        DB::table('statuses')->where('id', $id)->delete();

        return redirect()->route('admin.job_status'); 
    }
}
