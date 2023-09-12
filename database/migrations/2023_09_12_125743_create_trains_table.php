<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 255);
            $table->string('departure station', 255);
            $table->string('arrival station', 255);
            $table->string('Departure time', 16);
            $table->string('arrival time', 16);
            $table->unsignedBigInteger('train code');
            $table->unsignedTinyInteger('carriages number');
            $table->boolean('in time')->default(true);
            $table->boolean('deleted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
