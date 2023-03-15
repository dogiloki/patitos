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
        Schema::create('area_schedule_day', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_employee')->unsigned();
            $table->bigInteger('id_schedule_day')->unsigned();
            $table->bigInteger('id_area')->unsigned();
            $table->timestamps();
            $table->foreign('id_employee')->references('id')->on('employee');
            $table->foreign('id_schedule_day')->references('id')->on('schedule_day');
            $table->foreign('id_area')->references('id')->on('area');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('area_schedule_day');
    }
};
