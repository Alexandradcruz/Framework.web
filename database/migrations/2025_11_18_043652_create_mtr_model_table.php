<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mtr_model', function (Blueprint $table) {
            $table->id();
            $table->string('model');   // nama model kendaraan
            $table->integer('harga');  // harga model
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mtr_model');
    }
};
