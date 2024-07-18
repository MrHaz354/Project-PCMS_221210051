<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('tahun_kerja');
            $table->string('pekerjaan');
            $table->string('perusahaan');
            $table->string('lokasi_perusahan');
            $table->string('deskripsi1');
            $table->string('tahun_masuk');
            $table->string('universitas');
            $table->string('lokasi_univ');
            $table->string('jurusan');
            $table->string('deskripsi2');
            $table->string('hard_skill_1');
            $table->string('hard_skill_2');
            $table->string('hard_skill_3');
            $table->string('soft_skill_1');
            $table->string('soft_skill_2');
            $table->string('soft_skill_3');

        });
    }
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};