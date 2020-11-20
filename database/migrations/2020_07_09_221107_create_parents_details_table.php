<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents_details', function (Blueprint $table) {
            $table->bigIncrements('id');
           // $table->Increments('Students_id');
            //$table->string('Students_name');
          // $table->unsignedBigInteger('Student_id');
           //$table->foreignId('Student_id')->constrained();
           // $table->foreignId('Student_id')->references('id')->on('new_students');
            $table->string('Father_name');
            $table->string('Mother_name');
            $table->string('Father_tel');
            $table->string('Mother_tel');
            $table->string('Father_email');
            $table->string('Mother_email');
            $table->string('Survey');
            $table->timestamps();

          //  $table->foreign('Student_id')->references('id')->on('new_students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parents_details');
    }
}
