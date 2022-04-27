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
            $table->longText('SatsangID')->nullable();
            $table->longText('SatsangName')->nullable();
            $table->longText('SatsangAddress')->nullable();
            $table->longText('SatsangContact')->nullable();
            $table->longText('Day')->nullable();
            $table->longText('Time')->nullable();
            $table->longText('Area')->nullable();
            $table->longText('BranchID')->nullable();
            $table->longText('IsActive')->nullable();
            $table->longText('Satsang_Time_Type')->nullable();
            $table->longText('Satsang_Type')->nullable();
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
