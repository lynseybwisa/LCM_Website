<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->integer('sid');
            $table->string('exam_name');
            $table->date('from');
            $table->date('to');
            $table->integer('max_grade')->nullable();
            $table->integer('mat')->nullable();
            $table->integer('eng')->nullable();
            $table->integer('bio')->nullable();
            $table->integer('che')->nullable();
            $table->integer('phy')->nullable();
            $table->integer('geo')->nullable();
            $table->integer('his')->nullable();
            $table->integer('bus')->nullable();
            $table->integer('it')->nullable();
            $table->integer('kis')->nullable();
            $table->integer('and')->nullable();
            $table->integer('re')->nullable();
            $table->integer('he')->nullable();
            $table->integer('lit')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
