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
    Schema::create('mtr_kendaraan', function (Blueprint $table) {
        $table->id();

        $table->unsignedBigInteger('model_id');
        $table->unsignedBigInteger('warna_id');

        $table->string('cc');
        $table->string('no_mesin');
        $table->string('no_rangka');

        $table->timestamps();

        // Relasi FK (opsional tapi bagus)
        $table->foreign('model_id')->references('id')->on('mtr_model')->onDelete('cascade');
        $table->foreign('warna_id')->references('id')->on('mtr_warna')->onDelete('cascade');
    });
}

    public function down(): void
    {
        Schema::dropIfExists('mtr_kendaraan');
    }
};
