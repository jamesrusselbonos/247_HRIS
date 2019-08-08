<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblEmployeeRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('SSS');
            $table->string('philhealth');
            $table->string('pagibig');
            $table->string('TIN');
            $table->string('NBI_number')->nullable();
            $table->boolean('NBI');
            $table->boolean('diploma');
            $table->boolean('medical_cert');
            $table->boolean('TOR');
            $table->boolean('birth_cert');
            $table->boolean('brgy_clearance');
            $table->boolean('cedula');
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
