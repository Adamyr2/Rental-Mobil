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
        Schema::create('maintanances', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('price');
            $table->integer('km_car');
            $table->string('description');
            $table->foreignId('car_id')->constrained('cars');
            $table->foreignId('type_of_maintanance_id')->constrained('type_of_maintanances');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintanances');
    }
};
