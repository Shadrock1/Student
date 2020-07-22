<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{

    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id('id')->unique();
            $table->text('name');
            $table->unsignedBigInteger('group_id');
            $table->foreign('group_id')->references('id')->on('groups');
            $table->integer('birthday');
        });
    }


    public function down()
    {
        Schema::dropIfExists('students');
    }
}
