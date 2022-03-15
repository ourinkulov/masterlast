<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comples', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('studyyear')->unsigned();
            $table->bigInteger('semestr')->unsigned();
            $table->bigInteger('kurs')->unsigned();
            $table->bigInteger('guruh')->unsigned();
            $table->bigInteger('teacher')->unsigned();
            $table->bigInteger('fan')->unsigned();
//            $table->foreign('studyyear')->references('id')->on('studyyears')->onUpdate('cascade')->onDelete('cascade');
//            $table->foreign('semestr')->references('id')->on('semestrs')->onUpdate('cascade')->onDelete('cascade');
//            $table->foreign('kurs')->references('id')->on('kurs')->onUpdate('cascade')->onDelete('cascade');
//            $table->foreign('guruh')->references('id')->on('guruhs')->onUpdate('cascade')->onDelete('cascade');
//            $table->foreign('teacher')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
//            $table->foreign('fan')->references('id')->on('fans')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comples');
    }
}
