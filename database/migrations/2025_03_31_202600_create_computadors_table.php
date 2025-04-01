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
        Schema::create('computadors', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('marca', 50);
            $table->string('modelo', 50);
            $table->string('processador', 100);
            $table->integer('ram_gb');
            $table->string('armazenamento_tipo');
            $table->integer('armazenamento_capacidade');
            $table->string('sistema_operacional');
            $table->string('endereco_ip');
            $table->string('arquitetura_so');
            $table->string('status');
            $table->decimal('preco', 8,2)->default(0);
            $table->string('endereco_mac');
            $table->string('usuario_responsavel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computadors');
    }
};
