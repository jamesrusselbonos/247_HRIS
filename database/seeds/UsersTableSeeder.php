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
        	[
            'employee_id' => '1000000000000',
            'employee_id' => '4d1bc4a91ccf082e589466bd854cda78936068c4',
        	'email' => 'admin@gmail.com',
            'role' => '1',
        	'password' => bcrypt('Hello123$'),
        	]
            );
    }
}
