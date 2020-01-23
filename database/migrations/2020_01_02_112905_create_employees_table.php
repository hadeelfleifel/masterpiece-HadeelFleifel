<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Fname');
            $table->string('Sname');
            $table->string('Tname');
            $table->string('Lname');
            $table->date('DofB');
            $table->string('Nationality');
            $table->ENUM('Gender',['Female', 'Male']);
            $table->integer('SSN');
            $table->ENUM('Martial',['Single', 'Married','Divorced']);
            $table->date('JoinDate');

            $table->unsignedInteger('roles_id');
            $table->foreign('roles_id')->references('id')->on('roles');

            $table->string('EduMajour');
            $table->ENUM('AcademicDegree',['Doctor’s Degree', 'Master’s Degree','bachelors Degree','Diplom Degree','School Degree']);
            $table->date('GraduateYear');
            $table->string('Email');
            $table->string('Address');
            $table->integer('Phone');
            $table->integer('Salary');
            $table->integer('Perks');
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
        Schema::dropIfExists('employees');
    }
}
