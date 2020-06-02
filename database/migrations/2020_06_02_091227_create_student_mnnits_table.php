<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentMnnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_mnnits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('regno');
            $table->string('email');
            $table->integer('phoneno');
            $table->string('hostel');
            $table->integer('room');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_mnnits');
    }
}
