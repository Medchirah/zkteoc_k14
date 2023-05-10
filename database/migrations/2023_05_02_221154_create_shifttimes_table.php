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
        Schema::create('shifttimes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->time('date_entre');
            $table->time('date_sortie');
            $table->time('p_entre');
            $table->time('p_sortie');
            $table->time('debut_entre');
            $table->time('fin_entre');
            $table->time('debut_sortie');
            $table->time('fin_sortie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shifttimes');
    }
};
