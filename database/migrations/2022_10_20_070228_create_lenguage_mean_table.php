<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLenguageMeanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lenguage_mean', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lenguage_id');
            $table->unsignedBigInteger('mean_id');
            
            $table->foreign('lenguage_id')->references('id')->on('lenguages')->onDelete('cascade');
            $table->foreign('mean_id')->references('id')->on('means')->onDelete('cascade');

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
        Schema::dropIfExists('lenguage_mean');
    }
}
