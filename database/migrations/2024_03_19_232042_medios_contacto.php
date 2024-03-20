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
        Schema::create('medios_contacto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id')->nullable(false);
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->string('contacto');
            $table->enum('tipo',['email','telefono']);            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medios_contacto');
    }
};
