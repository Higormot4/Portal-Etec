@extends('layouts.portal')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-12 space-y-12">

    <!-- Cabeçalho da Página -->
    <div class="space-y-4">
        <!-- Badge Vermelha -->
        <span class="inline-block bg-red-600 text-white font-black uppercase tracking-wider px-3 py-1 border-2 border-black shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] text-sm">
            Grade Curricular Atualizada
        </span>
        <h1 class="text-4xl md:text-5xl font-black uppercase tracking-tight">
            Nossos Cursos Técnicos
        </h1>
        <p class="text-lg text-gray-600 font-medium max-w-2xl">
            Explore as habilitações profissionais oferecidas pela ETEC Zona Leste e escolha a trilha ideal para alavancar sua carreira.
        </p>
    </div>

    <hr class="border-2 border-black">

    <!-- Listagem Dinâmica de Cursos -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($cursos as $index => $curso)
            @php
                // Alterna as cores de destaque dos cards dinamicamente com base no índice
                $cores = ['bg-blue-600', 'bg-red-600', 'bg-yellow-400'];
                $corDestaque = $cores[$index % 3];
                // Se for amarelo o texto da tag interna precisa ser preto para dar contraste
                $textoTag = ($corDestaque === 'bg-yellow-400') ? 'text-black' : 'text-white';
            @endphp

            <!-- Card de Curso Estilo Neo-brutalista -->
            <div class="bg-white border-3 border-black flex flex-col justify-between shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] transition-all">
                
                <!-- Corpo do Card -->
                <div class="p-6 space-y-4">
                    <!-- Nome do Curso -->
                    <h3 class="text-2xl font-black uppercase tracking-tight leading-tight min-h-[56px]">
                        {{ $curso->nome }}
                    </h3>
                    
                    <!-- Descrição/Ementa -->
                    <p class="text-sm font-medium text-gray-600 line-clamp-4">
                        {{ $curso->descricao }}
                    </p>

                    <!-- Informações de Período e Duração -->
                    <div class="flex gap-2 flex-wrap pt-2">
                        <span class="bg-black text-white text-xs font-bold uppercase px-2 py-1">
                            Turno: {{ $curso->periodo }}
                        </span>
                        <span class="bg-gray-200 text-black text-xs font-bold uppercase px-2 py-1 border border-black">
                            Duração: {{ $curso->duracao }}
                        </span>
                    </div>
                </div>

                <!-- Base Colorida Dinâmica do Card (Mondrian Style) -->
                <div class="{{ $corDestaque }} h-4 border-t-3 border-black w-full"></div>
            </div>
        @empty
            <!-- Mensagem de Fallback caso o banco esteja vazio -->
            <div class="col-span-full bg-yellow-100 border-2 border-yellow-400 p-6 text-center">
                <p class="font-bold text-yellow-800">Nenhum curso técnico foi encontrado no banco de dados.</p>
            </div>
        @endforelse
    </div>

</div>
@endsection