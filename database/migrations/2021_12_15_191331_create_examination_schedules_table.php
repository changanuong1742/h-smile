<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExaminationSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examination_schedules', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->integer('customer_id');
            $table->integer('doctor_id');
            $table->integer('service_id');
            $table->date('date_at');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('note');
            $table->integer('status');
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
        Schema::dropIfExists('examination_schedules');
    }
}
