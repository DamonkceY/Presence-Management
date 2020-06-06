<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresenceArchivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presence_archives', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('day');
            $table->integer('session');
            $table->string('department');
            $table->integer('classroom_number');
            $table->integer('professor_id');
            $table->string('professor_name');
            $table->string('classgroup_name');
            $table->boolean('presence');
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
        Schema::dropIfExists('presence_archives');
    }
}
