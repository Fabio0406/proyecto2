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
            $table->string('nombre', 50);
            $table->string('descripcion', 100);
            $table->float('precio');
            $table->integer('cantidad');
            $table->foreignId('categoria_id')->constrained()->onDelete('cascade');
            $table->foreignId('usuario_registrador_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('proveedor_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
