<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOraliqnazoratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oraliqnazorats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('comples_id');
            $table->decimal('status');
            $table->string('creator');
            $table->string('deletor');
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
        Schema::dropIfExists('oraliqnazorats');
    }
}
