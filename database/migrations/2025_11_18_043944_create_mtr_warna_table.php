<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mtr_warna', function (Blueprint $table) {
            $table->id();
            $table->string('warna');  // kolom warna
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mtr_warna');
    }
};
