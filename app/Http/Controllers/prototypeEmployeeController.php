<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Prototype_Employee;

use DB;

class prototypeEmployeeController extends Controller
{
    public function create(Request $request){

    	$proto = new Prototype_Employee([
    		
    		'employee_id' => $request->get('employee_id'),
    		'employee_img' => $request->get('product_image'),
    		'gender' => $request->get('gender'),
    		'firstname' => $request->get('fname'),
    		'middle_name' => $request->get('m_name'),
    		'lastname' => $request->get('lname'),
    		'company' => $request->get('company'),
    		'department_id' => $request->get('department'),
    		'status_id' => $request->get('status'),
    		'address' => $request->get('address'),
    		'city' => $request->get('city'),
    		'province' => $request->get('province'),
    		'country' => $request->get('country'),
    		'zip_code' => $request->get('zip_code'),
    		'home_number' => $request->get('h_number'),
    		'mobile_number' => $request->get('m_number'),
    		'work_email' => $request->get('h_email'),
    		'personal_email' => $request->get('p_email'),
    		'birthday' => $request->get('bday'),
    		'SIN_SSN' => $request->get('ssn_sin'),
    		'emergency_name' => $request->get('e_name'),
    		'relationship' => $request->get('relationship'),
    		'emergency_address' => $request->get('e_address'),
    		'emergency_number' => $request->get('e_number'),
    		'job_id' => $request->get('jjob_title'),
    		'job_description' => $request->get('info_area'),
    		'job_level_id' => $request->get('job_level'),
    		'job_position_id' => $request->get('job_position'),
    		'date_hired' => $request->get('d_hired'),
    		'date_terminated' => $request->get('d_terminated'),
    		'SSS_no' => $request->get('sss_n'),
    		'philhealth_no' => $request->get('philhealth_n'),
    		'pagibig_no' => $request->get('pagibig_n'),
    		'TIN_no' => $request->get('tin_n'),
    		'NBI_no' => $request->get('nbi_n'),
    		'diploma' => $request->get('diploma'),
    		'medical' => $request->get('medical'),
    		'TOR' => $request->get('TOR'),
    		'birth_cert' => $request->get('birth_cert'),
    		'brgy_clearance' => $request->get('brgy'),
    		'cedula' => $request->get('cedula')
    	]);

    	$proto->save();

    	// $data = Input::all();
    	// $check = DB::table('prototype__employees')->insertGetId(array(
    	// 	'employee_id' => $data['employee_id'],
    	// 	'employee_img' => $data['product_image'],
    	// 	'gender' => $data['gender'],
    	// 	'firstname' => $data['fname'],
    	// 	'middle_name' => $data['m_name'],
    	// 	'lastname' => $data['lname'],
    	// 	'company' => $data['company'],
    	// 	'department_id' => $data['department'],
    	// 	'status_id' => $data['status'],
    	// 	'address' => $data['address'],
    	// 	'city' => $data['city'],
    	// 	'province' => $data['province'],
    	// 	'country' => $data['country'],
    	// 	'zip_code' => $data['zip_code'],
    	// 	'home_number' => $data['h_number'],
    	// 	'mobile_number' => $data['m_number'],
    	// 	'work_email' => $data['h_email'],
    	// 	'personal_email' => $data['p_email'],
    	// 	'birthday' => $data['bday'],
    	// 	'SIN_SSN' => $data['ssn_sin'],
    	// 	'emergency_name' => $data['e_name'],
    	// 	'relationship' => $data['relationship'],
    	// 	'emergency_address' => $data['e_address'],
    	// 	'emergency_number' => $data['e_number'],
    	// 	'job_id' => $data['jjob_title'],
    	// 	'job_description' => $data['info_area'],
    	// 	'job_level_id' => $data['job_level'],
    	// 	'job_position_id' => $data['job_position'],
    	// 	'date_hired' => $data['d_hired'],
    	// 	'date_terminated' => $data['d_terminated'],
    	// 	'SSS_no' => $data['sss_n'],
    	// 	'philhealth_no' => $data['philhealth_n'],
    	// 	'pagibig_no' => $data['pagibig_n'],
    	// 	'TIN_no' => $data['tin_n'],
    	// 	'NBI_no' => $data['nbi_n'],
    	// 	'diploma' => $data['diploma'],
    	// 	'medical' => $data['medical'],
    	// 	'TOR' => $data['TOR'],
    	// 	'birth_cert' => $data['birth_cert'],
    	// 	'brgy_clearance' => $data['brgy'],
    	// 	'cedula' => $data['cedula']
    	// ))->save();

    	return redirect()->route('admin.add_employee');
    }
}
