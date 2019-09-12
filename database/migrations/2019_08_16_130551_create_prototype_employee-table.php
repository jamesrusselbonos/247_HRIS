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
            $table->string('email')->required()->unique();
            $table->string('employee_img')->default('profile.png')->nullable();
            $table->string('gender')->nullable();
            $table->string('firstname')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('lastname')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('status_id')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('country')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('home_number')->nullable()->unique();
            $table->string('mobile_number')->nullable()->unique();
            $table->string('personal_email')->nullable()->unique();
            $table->string('birthday')->nullable();
            $table->string('SIN_SSN')->nullable();
            $table->string('emergency_name')->nullable();
            $table->string('relationship')->nullable();
            $table->string('emergency_address')->nullable();
            $table->string('emergency_number')->nullable()->unique();
            $table->integer('job_id')->nullable();
            $table->string('job_description')->nullable();
            $table->integer('job_level_id')->nullable();
            $table->string('job_position_id')->nullable();
            $table->string('date_hired')->nullable();
            $table->string('date_terminated')->nullable()->nullable();
            $table->integer('leave_credit');
            $table->double('salary', 8, 2);
            $table->double('allowance', 8, 2);
            $table->string('SSS_no')->nullable()->unique();
            $table->string('philhealth_no')->nullable()->unique();
            $table->string('pagibig_no')->nullable()->unique();
            $table->string('TIN_no')->nullable()->unique();
            $table->string('NBI_no')->nullable()->unique();
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
