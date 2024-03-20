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
        Schema::create('detalle_cotizacion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('version_id');
            $table->foreign('version_id')->references('id')->on('versiones_cotizacion');
            $table->foreignId('producto_id')->constrained();
            $table->unsignedInteger('cantidad');
            $table->double('iva');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_cotizacion');
    }
};
