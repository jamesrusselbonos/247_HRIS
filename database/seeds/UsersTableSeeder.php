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
        DB::table('users')->insert(
        	['name' => 'Admin',
            'employee_id' => '1000000000000',
        	'email' => 'admin@gmail.com',
            'role' => '1',
        	'password' => bcrypt('Hello123$'),
        	]
            );
    }
}
