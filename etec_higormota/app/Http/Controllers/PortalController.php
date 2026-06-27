<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;  // Importa o modelo de Cursos para consultar o banco
use App\Models\Evento; // Importa o modelo de Eventos para consultar o banco
use Illuminate\Support\Facades\Auth; // Importa a fachada de Autenticação do Laravel

class PortalController extends Controller
{
    /**
     * Retorna a View da Página Inicial (Home).
     */
    public function index()
    {
        // Apenas renderiza a tela estática da Home, sem necessidade de dados do banco
        return view('home');
    }

    /**
     * Consulta todos os cursos técnicos e retorna para a tela.
     */
    public function cursos()
    {
        // Busca todos os registros salvos na tabela 'cursos' via Eloquent ORM
        $cursos = Curso::all();

        // Retorna a view de cursos enviando a coleção através da função compact()
        return view('cursos', compact('cursos'));
    }

    /**
     * Consulta todos os eventos acadêmicos ordenados por data.
     */
    public function eventos()
    {
        // Busca os eventos trazendo os mais próximos/recentes primeiro
        $eventos = Evento::orderBy('data_evento', 'asc')->get();

        // Retorna a view de eventos passando os dados dinâmicos do MySQL
        return view('eventos', compact('eventos'));
    }

    /**
     * Exibe o painel restrito (Dashboard) com o boletim do aluno logado.
     */
    public function dashboard()
    {
        // Recupera o objeto do usuário (aluno) que está atualmente autenticado no sistema
        $aluno = Auth::user();

        /**
         * Usa o relacionamento que definimos no Model User (notas()) para buscar 
         * exclusivamente as menções pertencentes a este ID de aluno logado.
         * Isso impede que um aluno consiga ver as notas de outro.
         */
        $notas = $aluno->notas;

        // Retorna a tela protegida do Dashboard injetando o boletim do próprio aluno
        return view('dashboard', compact('notas'));
    }
}