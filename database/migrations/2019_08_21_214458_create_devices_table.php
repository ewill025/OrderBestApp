<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->bigIncrements('device_id');
            $table->string('brand_id');
            $table->string('model');
            $table->string('color_1');
            $table->string('color_2');
            $table->string('color_3');
            $table->string('color_4');
            $table->string('color_5');
            $table->string('size_1');
            $table->string('size_2');
            $table->string('size_3');
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
        Schema::dropIfExists('devices');
    }
}
