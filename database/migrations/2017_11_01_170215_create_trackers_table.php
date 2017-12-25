<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackers', function (Blueprint $table) {
            $table->increments('id');
            $table->date('day');
            $table->time('time');
            $table->integer('agent');
            $table->string('speaker');
            $table->string('segmentation',1);
            $table->integer('lead')->nullable();
            $table->integer('outcall');
            $table->time('tMinute');
            $table->integer('deal')->nullable();
            $table->integer('iSegundos')->nullable();
            $table->time('tAvg')->nullable();
            $table->integer('iSecondsAvg')->nullable();
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
        Schema::dropIfExists('trackers');
    }
}
