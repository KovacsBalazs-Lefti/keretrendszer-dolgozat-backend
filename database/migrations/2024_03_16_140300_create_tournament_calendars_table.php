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
        Schema::create('tournament_calendars', function (Blueprint $table) {
            $table->id();
            $table->string('track_name');
            $table->string('Country_name');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('laps');
            $table->string('cup_name');
            $table->string('race_series');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tournament_calendars');
    }
};
