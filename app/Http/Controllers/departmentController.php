<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Department;

use DB;

class departmentController extends Controller
{
    public function index(){
    	$departments = Department::all();

    	return view('admin.department', compact('departments'));
    }

    public function create(Request $request){
    	
    	$department = new Department([
    		'department_name' => $request->get('j_title'),
    		'description' => $request->get('j_desc')
    	]);

    	$department->save();

    	return redirect()->route('admin.department'); 
    }
    public function edit(Request $request){

        $dept_id = Department::find($request->mj_id);
        $dept_id->department_name = $request->mj_title;
        $dept_id->description = $request->mj_desc;
       $dept_id->save();

        return redirect()->route('admin.department'); 
    }
}
