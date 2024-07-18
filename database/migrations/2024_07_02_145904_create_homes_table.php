<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('keahlian');
            $table->string('deskripsi_keahlian');
            $table->string('about_me');
            $table->string('deskripsi_about_me');

        });
    }
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};