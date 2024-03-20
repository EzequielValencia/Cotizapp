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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoria_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('marca_id')->constrained();
            $table->string('nombre');
            $table->text('descripcion');
            $table->integer('stock')->default(0);
            $table->double('precio')->default(0);
            $table->boolean('descontinuado')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('porductos');
    }
};
