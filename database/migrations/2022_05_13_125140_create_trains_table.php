<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company',50);
            $table->string('departure_station',50);
            $table->string('arrival_station',50);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('train_code',10);
            $table->smallInteger('number_carriages');
            $table->boolean('in_time');
            $table->boolean('deleted');
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
        Schema::dropIfExists('trains');
    }
}
