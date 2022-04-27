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
        Schema::create('specials', function (Blueprint $table) {
            $table->id();
            $table->longText('name')->nullable();
            $table->string('ssn')->nullable();
            $table->string('snp')->nullable();
            $table->string('snm')->nullable();
            $table->string('snss')->nullable();
            $table->string('snsd')->nullable();
            $table->string('snks')->nullable();
            $table->string('sngp')->nullable();
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
        Schema::dropIfExists('specials');
    }
};
