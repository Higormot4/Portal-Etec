<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Executa a criação da tabela de eventos institucionais da ETEC.
     */
    public function up(): void
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            
            // Título principal do evento acadêmico
            $table->string('titulo');
            
            // Detalhes, regras ou cronograma completo do evento
            $table->text('descricao');
            
            // dateTime(): Armazena a data e a hora exata em que o evento vai acontecer
            $table->dateTime('data_evento');
            
            // Local físico ou virtual da realização (ex: "Auditório", "Laboratório 3")
            $table->string('local');
            
            $table->timestamps();
        });
    }

    /**
     * Remove a tabela se ela já existir no banco.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};