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
        
        Schema::create('quick_reservation', function (Blueprint $table) {
            $table->id();
            $table->string('Username');
            $table->string('place_to');
            $table->string('place_from');
            $table->string('pick_up_date');
            $table->string('pick_up_time');
            $table->string('contact_number');
        });
   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quick_reservation');
    }
};
