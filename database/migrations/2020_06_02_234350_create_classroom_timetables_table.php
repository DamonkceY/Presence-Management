<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomTimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classroom_timetables', function (Blueprint $table) {
            $table->id();
            $table->string('day');
            $table->integer('session_number');
            $table->string('department');
            $table->integer('classroom_number');
            $table->string('classgroup_name')->nullable();
            $table->string('professor_id')->nullable();
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
        Schema::dropIfExists('classroom_timetables');
    }
}
