<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('title');
            $table->text('body');
            $table->integer('post_type_id')->unsigned();
            $table->string('visibility');
            $table->integer('user_id')->unsigned();
            $table->string('status');
            $table->timestamps();

            /*$table->foreign('post_type_id')
                ->references('id')
                ->on('post_type');*/

            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            
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