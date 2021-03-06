<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name',256);
            $table->string('email',256)->nullable();
            $table->string('phone_number',256)->nullable();
            $table->string('majors',256)->nullable();
            $table->string('position',256)->nullable();
            $table->string('short_description',256)->nullable();
            $table->integer('type');
            $table->string('services')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
