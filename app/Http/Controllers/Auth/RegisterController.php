<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Role;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin/add_employee';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'employee_id' => ['required', 'string', 'max:255'],
            'employee_img' => ['string', 'max:255'],
            'gender' => ['string', 'max:20'],
            'firstname' => ['string', 'max:255'],
            'middle_name' => ['string', 'max:255'],
            'lastname' => ['string', 'max:255'],
            'department_id' => ['integer', 'max:10'],
            'status_id' => ['integer', 'max:255'],
            'address' => ['string', 'max:255'],
            'city' => ['string', 'max:255'],
            'province' => ['string', 'max:255'],
            'country' => ['string', 'max:255'],
            'zip_code' => ['string', 'max:255'],
            'home_number' => ['string', 'max:255'],
            'mobile_number' => ['string', 'max:255'],
            'work_email' => ['string', 'max:255'],
            'personal_email' => ['string', 'max:255'],
            'birthday' => ['string', 'max:255'],
            'SIN_SSN' => ['string', 'max:255'],
            'emergency_name' => ['string', 'max:255'],
            'relationship' => ['string', 'max:255'],
            'emergency_address' => ['string', 'max:255'],
            'emergency_number' => ['string', 'max:255'],
            'job_id' => ['integer', 'max:255'],
            'job_description' => ['integer', 'max:255'],
            'job_level_id' => ['string', 'max:255'],
            'job_position_id' => ['integer', 'max:255'],
            'date_hired' => ['string', 'max:255'],
            'date_terminated' => ['string', 'max:255'],
            'SSS_no' => ['string', 'max:255'],
            'philhealth_no' => ['string', 'max:255'],
            'pagibig_no' => ['string', 'max:255'],
            'TIN_no' => ['string', 'max:20'],
            'NBI_no' => ['string', 'max:20'],
            'diploma' => ['string', 'max:20'],
            'medical' => ['string', 'max:20'],
            'TOR' => ['string', 'max:20'],
            'birth_cert' => ['string', 'max:20'],
            'brgy_clearance' => ['string', 'max:20'],
            'cedula' => ['string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create((Request $request)
    {
        if($request->hasFile('product_image')){

            $filenameWithExt = $data->file('product_image')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $variation = preg_replace('/[\+]/', '', $filename);

            $extension = $request->file('product_image')->getClientOriginalExtension();

            $fileNameToStore = 'img/'.''.$variation.'_'.time().'.'.$extension;
            
            $image = $request->file('product_image');

            $destination = public_path('/img');
             $image->move($destination, $fileNameToStore);
             // $path = $request->file('product_image')->store($destination, $fileNameToStore);
        }
        else{

            $fileNameToStore = "img/profile.png";
        }
        return User::create([
            'employee_id' => $data['employee_id'],
            'employee_img' => $fileNameToStore,
            'gender' => $data['gender'],
            'firstname' => $data['fname'],
            'middle_name' => $data['m_name'],
            'lastname' => $data['lname'],
            'department_id' => $data['department'],
            'status_id' => $data['status'],
            'address' => $data['address'],
            'city' => $data['city'],
            'province' => $data['province'],
            'country' => $data['country'],
            'zip_code' => $data['zip_code'],
            'home_number' => $data['h_number'],
            'mobile_number' => $data['m_number'],
            'work_email' => $data['h_email'],
            'personal_email' => $data['p_email'],
            'birthday' => $data['bday'],
            'SIN_SSN' => $data['ssn_sin'],
            'emergency_name' => $data['e_name'],
            'relationship' => $data['relationship'],
            'emergency_address' => $data['e_address'],
            'emergency_number' => $data['e_number'],
            'job_id' => $data['jjob_title'],
            'job_description' => $data['info_area'],
            'job_level_id' => $data['job_level'],
            'job_position_id' => $data['job_position'],
            'date_hired' => $data['d_hired'],
            'date_terminated' => $data['d_terminated'],
            'SSS_no' => $data['sss_n'],
            'philhealth_no' => $data['philhealth_n'],
            'pagibig_no' => $data['pagibig_n'],
            'TIN_no' => $data['tin_n'],
            'NBI_no' => $data['nbi_n'],
            'diploma' => $data['diploma'],
            'medical' => $data['medical'],
            'TOR' => $data['TOR'],
            'birth_cert' => $data['birth_cert'],
            'brgy_clearance' => $data['brgy'],
            'cedula' => $data['cedula'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $role = Role::select('id')->where('name', 'Admin')->first();
        $user->roles()->attach($role);

        return $user;

        // return redirect()->route('admin.add_employee');
    }
}
