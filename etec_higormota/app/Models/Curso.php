<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    /**
     * Propriedade $fillable (Atribuição em Massa):
     * Define estritamente quais campos do formulário/banco podem ser preenchidos de uma vez.
     * Isso impede ataques de 'Mass Assignment', onde usuários maliciosos tentam injetar colunas extras.
     */
    protected $fillable = [
        'nome',      // Armazena o nome do curso técnico (ex: Desenvolvimento de Sistemas)
        'descricao', // Armazena a ementa ou perfil profissional do curso
        'periodo',   // Define o turno (Manhã, Tarde ou Noite)
        'duracao'    // Define o tempo total do curso (ex: 3 Semestres)
    ];
}