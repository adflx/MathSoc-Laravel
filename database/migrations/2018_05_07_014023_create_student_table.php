<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->increments('id');
			$table->string('idno')->unique();
			$table->string('lname');
			$table->string('fname');
			$table->string('mi');
			$table->string('course');
			$table->string('sex');
			$table->string('professor');
			$table->string('subject');
			$table->string('datepay');
			$table->string('paystat');
			$table->string('memstat');
			$table->string('memsy');
            $table->timestamps();
			$table->string('created_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
