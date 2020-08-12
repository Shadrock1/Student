<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentSubjectPivotTable extends Migration
{

    public function up()
    {
        Schema::create('student_subject', function (Blueprint $table) {
            $table->primary(['student_id', 'subject_id']);
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('subject_id');

            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');

            $table->integer('mark')->nullable();
        });
    }


    public function down()
    {
        Schema::dropIfExists('marks');
    }
}
