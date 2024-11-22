<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("symbol_id")->default(0);
            $table->string("symbol")->nullable();
            $table->double("quantity")->nullable();
            $table->double("price")->nullable();
            $table->string("sum")->nullable();
            $table->double("fee")->nullable();
            $table->double("feeCoefficient")->nullable();
            $table->double("feeAsset")->nullable();
            $table->boolean("isBuyer")->nullable();
            $table->string("timestamp")->nullable();
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
        Schema::dropIfExists('trades');
    }
}
