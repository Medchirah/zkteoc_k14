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
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('departement_id')->references('id')->on('departements');
            $table->foreignId('device_id')->references('id')->on('devices');
           
            $table->string('photo');
            $table->string('nom');
            $table->String('gender');
            $table->char('empriente');
            $table->date('date_travail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employes');
    }
};
