<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert(
        	['job_position' => 'Web Developer',
            'description' => 'Lorem Web'
        	]);
    }
}
