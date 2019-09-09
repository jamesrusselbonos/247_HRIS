<?php

use Illuminate\Database\Seeder;

class LevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert(
        	['job_level' => 'Staff',
            'description' => 'Lorem Staff'
        	]);
    }
}
