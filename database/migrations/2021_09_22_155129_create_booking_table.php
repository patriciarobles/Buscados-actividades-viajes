<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('activity_id')->unsigned()->index()->nullable();
            $table->integer('number');
            $table->double('price', 8, 2);
            $table->date('date_booked');
            $table->date('date_activity');
            $table->timestamps();
        });

        Schema::table('booking', function($table) {
            $table->foreign('activity_id')->references('id')->on('activity');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
}
