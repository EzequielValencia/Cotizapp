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
        Schema::create('versiones_cotizacion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cotizacion_id')->nullable(false);
            $table->foreign('cotizacion_id')->references('id')->on('cotizaciones');
            $table->string('numero_version')->nullable(false);
            $table->boolean('version_final')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('versiones_cotizacion');
    }
};
