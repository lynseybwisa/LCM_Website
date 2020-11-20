<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Students_name');
            $table->string('Nationality');
            $table->string('DOB');
            $table->string('Entry_date');
            $table->string('Residence');
            $table->string('Previous_School');
            $table->string('School');
            $table->string('Class');
            $table->string('Boarding');
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
        Schema::dropIfExists('new_students');
    }
}
