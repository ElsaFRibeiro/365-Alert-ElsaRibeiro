<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateAlertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alerts', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->primary('id');
            $table->enum('type', ['Extreme Danger', 'Danger', 'Potential Danger', 'Low Danger', 'Dried Up River'])->nullable();
            $table->enum('trend',['rest', 'down','up'])->nullable();
            $table->enum('description', ['alert','pre-alert','caution','awareness'])->nullable();
            $table->string('location');
            $table->string('river');
            $table->float('water_level')->nullable();
            $table->float('water_alert_level')->nullable();
            $table->float('water_prealert_level')->nullable();
            $table->float('water_caution_level')->nullable();
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
        Schema::dropIfExists('alerts');
    }
}
