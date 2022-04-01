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
            $table->longText('dutydate')->nullable();
            $table->longText('name')->nullable();
            $table->longText('address')->nullable();
            $table->longText('time')->nullable();
            $table->longText('contact')->nullable();
            $table->longText('pracharak_name')->nullable();
            $table->longText('pracharak_contact')->nullable();
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
