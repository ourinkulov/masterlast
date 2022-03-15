<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnjurnalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onjurnals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('uid');
            $table->bigInteger('comples_id');
            $table->bigInteger('onid');
            $table->decimal('baho',2,2);
            $table->string('creator');
            $table->string('deletor');
            $table->timestamps();
//            $table->foreign('comples_id')
//                ->references('id')
//                ->on('comples')
//            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('onjurnals');
    }
}
