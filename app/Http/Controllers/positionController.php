<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Position;

use DB;

class positionController extends Controller
{
    public function index(){
    	$position = Position::all();

    	return view('admin.job_position', compact('position'));
    }
    public function create(Request $request){
    	
    	$lev = new Position([
    		'job_position' => $request->get('p_title'),
    		'description' => $request->get('p_desc')
    	]);

    	$lev->save();

    	return redirect()->route('admin.job_position'); 
    }
    public function edit(Request $request){

        $lev_id = Position::find($request->mp_id);
        $lev_id->job_position = $request->mp_title;
        $lev_id->description = $request->mp_desc;
       $lev_id->save();

        return redirect()->route('admin.job_position'); 
    }

    public function delete($id){
        DB::table('positions')->where('id', $id)->delete();

        return redirect()->route('admin.job_position');
    }
}
