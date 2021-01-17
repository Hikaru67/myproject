<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('fullName', 50);
            $table->integer('birthday');
            $table->string('email', 255)->unique();
            $table->string('phoneNumber', 15)->unique();
            $table->string('job', 50)->nullable();;
            $table->string('avatar', 100)->nullable();
            $table->string('facebook', 100)->unique()->nullable();;
            $table->tinyInteger('gender');
            $table->string('country', 50);
            $table->tinyInteger('role');
            $table->tinyInteger('status')->default(STATUS_USER['NEW']);
            $table->timestamps() ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
