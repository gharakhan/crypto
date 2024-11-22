<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHourlyVolumeToStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stats', function (Blueprint $table) {
            $table->double('hourly_volume')->after('volume_24h')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stats', function (Blueprint $table) {
            $table->dropColumn('hourly_volume');
        });
    }
}
