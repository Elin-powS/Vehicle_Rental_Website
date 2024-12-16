<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_reservation', function (Blueprint $table) {
            $table->id();
            $table->string('Username');
            $table->string('from_place');
            $table->string('to_place');
            $table->string('pick_up_date');
            $table->string('return_date');
            $table->string('pick_up_time');
            $table->string('return_time');
            $table->string('contact_number');
           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_reservation');
    }
};
