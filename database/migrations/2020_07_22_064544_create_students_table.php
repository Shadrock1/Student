<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{

    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('name');
            $table->foreignId('group_id')->constrained()->onDelete('cascade');
            $table->date('birthday');
        });
    }


    public function down()
    {
        Schema::dropIfExists('students');
    }
}
