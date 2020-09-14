<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('body');
            $table->mediumText('imagepost')->nullable();
            $table->bigInteger('id_user_post')->unsigned();
            $table->timestamp('created_at_post', 0)->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('update__at_post', 0)->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('id_user_post')->references('id')->on('users')->onDelete('cascade');

        });

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
