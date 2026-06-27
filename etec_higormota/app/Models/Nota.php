<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    /**
     * Configuração de campos preenchíveis para o boletim escolar dinâmico.
     */
    protected $fillable = [
        'user_id', // ID do aluno dono dessa menção (Chave Estrangeira)
        'materia', // Componente curricular técnico (ex: Programação Web)
        'mencao'   // Menções padrão do Centro Paula Souza (MB, B, R, I)
    ];
}