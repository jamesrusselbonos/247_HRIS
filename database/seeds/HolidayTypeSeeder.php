<?php

use Illuminate\Database\Seeder;

class HolidayTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('holiday_types')->insert([
	    	[
	    	'holiday_type' => 'Legal Holiday',
	    	'percentage' => '0'
	    	],
	    	[
	    	'holiday_type' => 'Special Holiday',
	    	'percentage' => '0'
	    	]
    	]);
    }
}
