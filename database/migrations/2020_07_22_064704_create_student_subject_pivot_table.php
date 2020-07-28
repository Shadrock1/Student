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
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->foreignId('subject_id')->constrained()->onDelete('cascade');
            $table->integer('mark')->nullable();

        });
    }


    public function down()
    {
        Schema::dropIfExists('marks');
    }
}
