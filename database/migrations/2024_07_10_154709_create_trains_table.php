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
            $table->string('agency', 40);
            $table->string('departure_station', 60);
            $table->string('arrival_station', 60);
            $table->datetime('departure_time');
            $table->datetime('arrival_time');
            $table->string('train_code', 10);
            $table->tinyInteger('number_of_carriages');
            //si possono assegnare valori di dafault (->)
            $table->tinyInteger('in_time')->default(true);
            $table->tinyInteger('deleted')->default(false);
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
