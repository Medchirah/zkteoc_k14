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
        Schema::create('tabletimes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employe_id')->references('id')->on('employes');
            $table->foreignId('shifttime_id')->references('id')->on('shifttimes');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabletimes');
    }
};
