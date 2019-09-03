<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'employee_id' => '000',
            'employee_img' => 'profile.png',
            'gender' => 'Male',
            'firstname' => 'Admin',
            'middle_name' => 'Admin',
            'lastname' => 'Admin',
            'department_id' => '0',
            'status_id' => '0',
            'address' => 'Sample',
            'city' => 'Sample',
            'province' => 'Sample',
            'country' => 'Sample',
            'zip_code' => '0000',
            'home_number' => '000',
            'mobile_number' => '0000',
            'work_email' => 'Sample@example.com',
            'personal_email' => 'Sample2@example.com',
            'birthday' => 'Sample',
            'SIN_SSN' => '0000',
            'emergency_name' => 'Sample',
            'relationship' => 'Sample',
            'emergency_address' => 'Sample',
            'emergency_number' => '00000',
            'job_id' => '0',
            'job_description' => 'Sample',
            'job_level_id' => '0',
            'job_position_id' => '0',
            'date_hired' => '000',
            'date_terminated' => '',
            'SSS_no' => '000',
            'philhealth_no' => '000',
            'pagibig_no' => '000',
            'TIN_no' => '000',
            'NBI_no' => '000',
            'diploma' => 'None',
            'medical' => 'None',
            'TOR' => 'None',
            'birth_cert' => 'None',
            'brgy_clearance' => 'None',
            'cedula' => 'None',
        	'email' => 'admin@gmail.com',
            'role' => '1',
        	'password' => bcrypt('Hello123$'),
        	]);
    }
}
