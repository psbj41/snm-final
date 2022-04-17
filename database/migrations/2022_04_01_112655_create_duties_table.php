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
        Schema::create('duties', function (Blueprint $table) {
            $table->id();
            $table->longText('Dutydate')->nullable();
            $table->longText('satsangname')->nullable();
            $table->longText('SatsangAddress')->nullable();
            $table->longText('SatsangTime')->nullable();
            $table->longText('satsangcontact')->nullable();
            $table->longText('PracharakName')->nullable();
            $table->longText('PracharakContact')->nullable();
            $table->longText('SectorID')->nullable();
            $table->longText('BranchID')->nullable();
            $table->longText('Day')->nullable();
            $table->longText('Sangat_Day')->nullable();
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
        Schema::dropIfExists('duties');
    }
};
