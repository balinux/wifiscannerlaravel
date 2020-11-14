<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWifisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wifis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('device_id')->default(0);
            $table->string('ssid')->nullable();
            $table->string('bssid')->nullable();
            $table->integer('level')->nullable();
            $table->integer('frequency')->nullable();
            $table->integer('signal_level')->nullable();
            $table->string('security')->nullable();
            $table->double('lat')->nullable();
            $table->double('long')->nullable();
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
        Schema::dropIfExists('wifis');
    }
}
