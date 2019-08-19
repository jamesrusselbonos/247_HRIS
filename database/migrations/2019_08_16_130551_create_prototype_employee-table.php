<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrototypeEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prototype__employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employee_id')->required()->unique();
            $table->string('employee_img')->nullable();
            $table->string('gender')->required();
            $table->string('firstname')->required();
            $table->string('middle_name')->required();
            $table->string('lastname')->required();
            $table->integer('department_id')->required();
            $table->integer('status_id')->required();
            $table->string('address')->required();
            $table->string('city')->required();
            $table->string('province')->required();
            $table->string('country')->required();
            $table->string('zip_code')->required();
            $table->string('home_number')->nullable()->unique();
            $table->string('mobile_number')->required()->unique();
            $table->string('work_email')->required()->unique();
            $table->string('personal_email')->required()->unique();
            $table->string('birthday')->required();
            $table->string('SIN_SSN')->required();
            $table->string('emergency_name')->required();
            $table->string('relationship')->required();
            $table->string('emergency_address')->required();
            $table->string('emergency_number')->required()->unique();
            $table->integer('job_id')->required();
            $table->string('job_description')->required();
            $table->integer('job_level_id')->required();
            $table->string('job_position_id')->required();
            $table->string('date_hired')->required();
            $table->string('date_terminated')->nullable()->required();
            $table->string('SSS_no')->required()->unique();
            $table->string('philhealth_no')->required()->unique();
            $table->string('pagibig_no')->required()->unique();
            $table->string('TIN_no')->required()->unique();
            $table->string('NBI_no')->required()->unique();
            $table->string('diploma');
            $table->string('medical');
            $table->string('TOR');
            $table->string('birth_cert');
            $table->string('brgy_clearance');
            $table->string('cedula');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
