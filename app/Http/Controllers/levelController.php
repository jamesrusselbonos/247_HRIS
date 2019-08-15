<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Level;

class levelController extends Controller
{
    public function index(){
    	$level = Level::all();

    	return view('admin.job_level', compact('level'));
    }
    public function create(Request $request){
    	
    	$lev = new Level([
    		'job_level' => $request->get('level_title'),
    		'description' => $request->get('level_desc')
    	]);

    	$lev->save();

    	return redirect()->route('admin.job_level'); 
    }
    public function edit(Request $request){

        $lev_id = Level::find($request->mlevel_id);
        $lev_id->job_level = $request->mlevel_title;
        $lev_id->description = $request->mlevel_desc;
       $lev_id->save();

        return redirect()->route('admin.job_level'); 
    }
}
