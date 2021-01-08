<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseRqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_rqs', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('frequency');
            $table->smallInteger('durationTime');
            $table->tinyInteger('targetTop');
            $table->tinyInteger('wishJob');
            $table->tinyInteger('completeExercise');
            $table->tinyInteger('outCondition');
            $table->string('nowSkill');
            $table->string('mission');
            $table->foreignId('userId')->constrained('users');
            $table->foreignId('classesId')->constrained('classes');
            $table->tinyInteger('status')->default(STATUS_COURSERQ['APPROVING']);
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
        Schema::dropIfExists('course_rqs');
    }
}
