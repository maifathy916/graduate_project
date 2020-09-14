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
            $table->bigIncrements('id');
            $table->string('fristname');
            $table->string('lastname');
            $table->string('email');
            $table->string('password');
            $table->string('gender')->nullable();
            $table->date('brithdate');
            $table->string('phone')->nullable();
            $table->string('role')->default('user');
            $table->string('describtion')->nullable();
            $table->string('clenicAdress')->nullable();
            $table->mediumText('image')->nullable();
            $table->string('Language')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
