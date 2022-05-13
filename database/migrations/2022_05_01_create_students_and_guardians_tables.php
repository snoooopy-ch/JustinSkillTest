<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->text('last_name');
            $table->text('first_name');
            $table->text('current_grade');
            $table->boolean('currently_enrolled');
            $table->text('previous_grade');
            $table->timestamps();
        });

        Schema::create('guardians', function (Blueprint $table) {
            $table->increments('id');
            $table->text('last_name');
            $table->text('first_name');
            $table->integer('student_id');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('students');
    }
};