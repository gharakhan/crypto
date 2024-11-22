<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string('key')->nullable();
            $table->string('name')->nullable();
            $table->string('dominance')->nullable();
            $table->string('volume_24h')->nullable();
            $table->string('market_cap')->nullable();
            $table->integer('price')->nullable();
            $table->string('percent_change_1h')->nullable();
            $table->string('percent_change_24h')->nullable();
            $table->string('percent_change_7d')->nullable();
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
        Schema::dropIfExists('currencies');
    }
}
