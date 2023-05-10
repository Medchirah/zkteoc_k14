<?php

use App\Models\departement;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('nomDept')->nullable();
            $table->string('photo')->default('image56778.jpg');
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
