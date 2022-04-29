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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('PracharakID')->nullable();
            $table->string('name')->nullable();
            $table->longText('Gyan_Pracharak')->nullable();
            $table->string('phone')->unique();
            $table->longText('Email_ID')->nullable();
            $table->longText('Gender')->nullable();
            $table->longText('Area')->nullable();
            $table->longText('BranchID')->nullable();
            $table->longText('General_Satsang')->nullable();
            $table->longText('Nari_Satsang')->nullable();
            $table->longText('Sector_Sanyojak')->nullable();
            $table->longText('Area_Mukhi_Branch_Incharge')->nullable();
            $table->longText('Sewadal_Sanchalak')->nullable();
            $table->longText('K_Sanchalak')->nullable();
            $table->string('password');
            $table->string('role')->default('normal');
            $table->string('reset')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
