<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Department;

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
}
