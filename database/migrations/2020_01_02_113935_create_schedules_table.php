<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('class_id');

            $table->foreign('class_id')->references('id')->on('classes');

            $table->ENUM('day',['Sunday', 'Monday','Tuesday','Wednesday','Thursday']);

            $table->unsignedInteger('lesson1');
            $table->foreign('lesson1')->references('id')->on('subjects');

            $table->unsignedInteger('lesson2');
            $table->foreign('lesson2')->references('id')->on('subjects');

            $table->unsignedInteger('lesson3');
            $table->foreign('lesson3')->references('id')->on('subjects');

            $table->unsignedInteger('lesson4');
            $table->foreign('lesson4')->references('id')->on('subjects');

            $table->unsignedInteger('lesson5');
            $table->foreign('lesson5')->references('id')->on('subjects');

            $table->unsignedInteger('lesson6');
            $table->foreign('lesson6')->references('id')->on('subjects');

            $table->unsignedInteger('lesson7');
            $table->foreign('lesson7')->references('id')->on('subjects');


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
        Schema::dropIfExists('schedules');
    }
}
