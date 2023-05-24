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
        Schema::create('newtables', function (Blueprint $table) {
            $table->id();
            $table->string('nom_employe');
            $table->string('nom_departement');
            $table->string('gender');
            $table->date('date debut de thavaille');
            $table->string('device');
            $table->string('shifttime');
            $table->time('check-In');
            $table->time('check-out');
            $table->string('duration');
            $table->date('date jour');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newtables');
    }
};
