<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert(
        	['department_name' => 'Web Development',
            'description' => 'Lorem Web'
        	]);
    }
}
