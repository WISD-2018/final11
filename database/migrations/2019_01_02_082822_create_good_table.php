<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('good', function (Blueprint $table) {
            $table->increments('id');
            $table->string('goodname')->nullable();;
            $table->integer('price')->nullable();;
            $table->integer('quantity')->nullable();;
            $table->dateTime('expirydate')->nullable();;
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
        Schema::dropIfExists('good');
    }
}
