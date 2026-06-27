<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Executa a criação da tabela de boletim escolar/notas dos alunos.
     */
    public function up(): void
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            
            /**
             * foreignId('user_id')->constrained()->onDelete('cascade'):
             * 1. Cria a coluna 'user_id' como chave estrangeira.
             * 2. constrained(): Vincula automaticamente à tabela 'users' pelo padrão de nome do Laravel.
             * 3. onDelete('cascade'): Se o aluno for excluído do sistema, todas as suas notas são apagadas 
             * automaticamente junto, garantindo a integridade referencial do MySQL.
             */
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            
            // Nome do componente curricular/matéria técnica
            $table->string('materia');
            
            // Armazena as menções oficiais do Centro Paula Souza (MB, B, R, I)
            $table->string('mencao');
            
            $table->timestamps();
        });
    }

    /**
     * Remove a tabela de notas.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};