<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('name',64);
            $table->string('surname',64);
            $table->string('ns',16)->unique();
            $table->bigInteger('id_role')->unsigned();
            $table->bigInteger('id_salary')->unsigned();
            $table->timestamps();
            $table->foreign('id_role')->references('id')->on('role');
            $table->foreign('id_salary')->references('id')->on('salary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
};
