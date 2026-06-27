<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Curso;
use App\Models\Evento;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * Método principal que roda ao executar o comando de seeding no terminal.
     */
    public function run(): void
    {
        // ------------------------------------------------------------------
        // 1. POPULAR A TABELA DE CURSOS
        // ------------------------------------------------------------------
        
        Curso::create([
            'nome' => 'Técnico em Desenvolvimento de Sistemas',
            'descricao' => 'Capacita o aluno para analisar, projetar, documentar, especificar, testar, implantar e manter sistemas computacionais e aplicações web/mobile.',
            'periodo' => 'Noite',
            'duracao' => '3 Semestres'
        ]);

        Curso::create([
            'nome' => 'Técnico em Administração',
            'descricao' => 'Prepara profissionais para atuar nas áreas de recursos humanos, finanças, logística, marketing e vendas, compreendendo os fluxos operacionais de uma empresa.',
            'periodo' => 'Tarde',
            'duracao' => '3 Semestres'
        ]);

        Curso::create([
            'nome' => 'Ensino Médio com Habilitação Técnica em Logística',
            'descricao' => 'Formação integral que une a base nacional comum curricular com as competências operacionais de armazenamento, transporte e distribuição de mercadorias.',
            'periodo' => 'Manhã',
            'duracao' => '3 Anos'
        ]);

        // ------------------------------------------------------------------
        // 2. POPULAR A TABELA DE EVENTOS
        // ------------------------------------------------------------------

        Evento::create([
            'titulo' => 'Semana de Tecnologia e Inovação',
            'descricao' => 'Ciclo de palestras, minicursos e workshops com profissionais renomados do mercado técnico apresentando as principais tendências de TI, IA e Engenharia de Dados.',
            'data_evento' => '2026-10-20 19:00:00',
            'local' => 'Auditório Principal e Laboratórios de Informática'
        ]);

        Evento::create([
            'titulo' => 'Feira de Profissões e Projetos (TCC)',
            'descricao' => 'Exposição aberta à comunidade dos projetos de conclusão de curso desenvolvidos pelos formandos de todas as vertentes técnicas da ETEC.',
            'data_evento' => '2026-11-25 14:00:00',
            'local' => 'Quadra Poliesportiva e Pátio Central'
        ]);

        Evento::create([
            'titulo' => 'Palestra: Preparação para o Mercado e Jovem Aprendiz',
            'descricao' => 'Orientações práticas sobre elaboração de currículos atrativos, postura profissional em processos seletivos e dicas para ingressar no programa Jovem Aprendiz.',
            'data_evento' => '2026-08-12 10:00:00',
            'local' => 'Sala de Audiovisual'
        ]);
    }
}