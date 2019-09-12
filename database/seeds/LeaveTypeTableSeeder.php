<?php

use Illuminate\Database\Seeder;

class LeaveTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leave_types')->insert([
                	[
                	'leave_type' => 'Sick Leave',
                	'description' => 'Lorem Ipsum Sick Leave'
                	],[
                	'leave_type' => 'Vacation Leave',
                	'description' => 'Lorem Ipsum Vacation Leave'
                	],[
                	'leave_type' => 'Paternity Leave',
                	'description' => 'Lorem Ipsum Paternity Leave'
                	]
                	]);    
    }
}
