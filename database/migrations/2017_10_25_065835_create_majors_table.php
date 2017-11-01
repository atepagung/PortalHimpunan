<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMajorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('majors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('university_id')->unsigned();
            $table->integer('major_category_id')->unsigned();
            $table->timestamps();

            $table->foreign('university_id')
                ->references('id')
                ->on('universities');

            /*$table->foreign('major_category_id')
                ->references('id')
                ->on('major_category');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('majors');
    }
}
