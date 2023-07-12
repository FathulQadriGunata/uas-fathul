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
        Schema::create('mahasiswaferdi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ferdi', '50');
            $table->string('alamat_ferdi', '50');
            $table->string('prodi_ferdi', '50');
            $table->string('email_ferdi', '50');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswaferdi');
    }
};
