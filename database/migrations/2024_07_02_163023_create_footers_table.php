<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('copyright');
            $table->string('socialmedialink1');
            $table->string('socialmedialink2');
            $table->string('socialmedialink3');
            $table->string('pagelink1');
            $table->string('pagelink2');
            $table->string('pagelink3');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};