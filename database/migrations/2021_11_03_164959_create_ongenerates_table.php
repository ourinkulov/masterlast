<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOngeneratesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ongenerates', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('uid');
            $table->bigInteger('comples_id');
            $table->bigInteger('onid');
            $table->string('randomnum',255);
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
        Schema::dropIfExists('ongenerates');
    }
}
