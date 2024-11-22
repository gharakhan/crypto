<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("symbol_id")->default(0);
            $table->text("clientOrderId");
            $table->string("symbol")->nullable();
            $table->string("type")->nullable();
            $table->string("side")->nullable();
            $table->double("price")->nullable();
            $table->double("quantity")->nullable();
            $table->double("origQty")->nullable();
            $table->double("origSum")->nullable();
            $table->double("executedPrice")->nullable();
            $table->double("executedQty")->nullable();
            $table->double("executedSum")->nullable();
            $table->double("sum")->nullable();
            $table->double("fee")->nullable();
            $table->double("feeCoefficient")->nullable();
            $table->string("feeAsset")->nullable();
            $table->double("executedPercent")->nullable();
            $table->string("client_id")->nullable();
            $table->string("status")->nullable();
            $table->boolean('active')->default(0);
            $table->boolean('isBuyer')->default(0);
            $table->boolean('isMaker')->default(0);
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
        Schema::dropIfExists('orders');
    }
}
