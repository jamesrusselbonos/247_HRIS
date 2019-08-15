<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblJobLevel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_levels', function (Blueprint $table) {
                   $table->bigIncrements('id');
                   $table->string('job_level');
                   $table->string('description')->nullable();
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
