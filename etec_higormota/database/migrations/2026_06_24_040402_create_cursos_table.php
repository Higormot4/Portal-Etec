<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Executa a criação da tabela no banco de dados.
     */
    public function up(): void
    {
        Schema::create('cursos', function (Blueprint $table) {
            // id(): Cria uma chave primária auto-incrementável do tipo BIGINT UNSIGNED
            $table->id();
            
            // string(): Cria uma coluna do tipo VARCHAR para o nome do curso técnico
            $table->string('nome');
            
            // text(): Cria uma coluna do tipo TEXT (suporta descrições longas para a ementa)
            $table->text('descricao');
            
            // Define o turno do curso (Matutino, Vespertino, Noturno)
            $table->string('periodo');
            
            // Define o tempo de duração total (ex: "3 Semestres", "2 Anos")
            $table->string('duracao');
            
            // timestamps(): Cria automaticamente as colunas 'created_at' e 'updated_at'
            $table->timestamps();
        });
    }

    /**
     * Reverte as alterações (usado em comandos como php artisan migrate:rollback).
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};