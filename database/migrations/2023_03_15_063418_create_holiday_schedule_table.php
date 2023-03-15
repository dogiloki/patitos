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
        Schema::create('holiday_schedule', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_employee')->unsigned();
            $table->date('date_start');
            $table->date('date_end');
            $table->timestamps();
            $table->foreign('id_employee')->references('id')->on('employee');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('holiday_schedule');
    }
};
