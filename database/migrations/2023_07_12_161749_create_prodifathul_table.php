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
        Schema::create('prodifathul', function (Blueprint $table) {
            $table->id();
            $table->string('prodi_id', '10');
            $table->string('nama_prodi', '30');
            $table->string('pejabat', '30');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodifathul');
    }
};
