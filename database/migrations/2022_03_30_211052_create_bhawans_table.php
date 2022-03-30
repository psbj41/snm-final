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
        Schema::create('bhawans', function (Blueprint $table) {
            $table->id();
            $table->longText('area')->nullable();
            $table->longText('day')->nullable();
            $table->longText('time')->nullable();
            $table->longText('address')->nullable();
            $table->longText('sector_sanyojak_name')->nullable();
            $table->longText('sector_sanyojak_contact')->nullable();
            $table->longText('area_mukhi_1_name')->nullable();
            $table->longText('area_mukhi_1_contact')->nullable();
            $table->longText('area_mukhi_2_name')->nullable();
            $table->longText('area_mukhi_2_contact')->nullable();
            $table->longText('contact_person_1_name')->nullable();
            $table->longText('contact_person_1_contact')->nullable();
            $table->longText('contact_person_2_name')->nullable();
            $table->longText('contact_person_2_contact')->nullable();
            $table->longText('type_of_satsang')->nullable();
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
        Schema::dropIfExists('bhawans');
    }
};
