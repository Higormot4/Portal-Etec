<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    /**
     * Proteção de Atribuição em Massa para a tabela de eventos institucionais.
     * Garante a segurança na persistência de dados vindos da camada de controle.
     */
    protected $fillable = [
        'titulo',      // Nome do evento da ETEC (ex: Semana Tecnológica)
        'descricao',   // Detalhes e cronograma da atividade acadêmica
        'data_evento', // Campo de data e hora do evento no MySQL
        'local'        // Espaço físico da escola (ex: Laboratório 4, Auditório)
    ];
}