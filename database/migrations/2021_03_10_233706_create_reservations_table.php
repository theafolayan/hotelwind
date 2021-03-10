<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->integer('room_id');
            $table->string('occupant_name');
            $table->string('occupant_phone_number');
            $table->string('occupant_email');
            $table->integer('occupant_age');
            $table->string('occupant_address');
            $table->string('date_of_arrival');
            $table->mediumText('reservation_note');
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
        Schema::dropIfExists('reservations');
    }
}
