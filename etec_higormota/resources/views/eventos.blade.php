@extends('layouts.portal')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-12 space-y-12">

    <!-- Cabeçalho Correto da Página de Eventos -->
    <div class="space-y-4">
        <span class="inline-block bg-blue-600 text-white font-black uppercase tracking-wider px-3 py-1 border-2 border-black shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] text-sm">
            Calendário Acadêmico 2026
        </span>
        <h1 class="text-4xl md:text-5xl font-black uppercase tracking-tight">
            Eventos e Atividades
        </h1>
        <p class="text-lg text-gray-600 font-medium max-w-2xl">
            Fique por dentro das palestras, feiras, workshops e eventos institucionais que movimentam a ETEC Zona Leste.
        </p>
    </div>

    <hr class="border-2 border-black">

    <!-- Estrutura da Timeline Pop Art -->
    <div class="relative border-l-4 border-black ml-4 md:ml-32 space-y-12 py-4">
        @forelse($eventos as $index => $evento)
            @php
                $coresMarcador = ['bg-yellow-400', 'bg-red-600', 'bg-blue-600'];
                $corAtual = $coresMarcador[$index % 3];
            @endphp

            <div class="relative pl-8 md:pl-12">
                
                <!-- Marcador da timeline -->
                <div class="absolute -left-[14px] top-1.5 w-6 h-6 rounded-full border-3 border-black {{ $corAtual }} shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]"></div>

                <!-- Exibição de Data na Esquerda -->
                <div class="hidden md:block absolute -left-32 top-1 w-24 text-right">
                    <span class="block font-black text-lg leading-none text-black">
                        {{ date('d/m', strtotime($evento->data_evento)) }}
                    </span>
                    <span class="text-xs font-bold uppercase text-gray-500">
                        {{ date('Y', strtotime($evento->data_evento)) }}
                    </span>
                </div>

                <!-- Card de Conteúdo do Evento -->
                <div class="bg-white border-3 border-black p-6 shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] hover:shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:translate-x-0.5 hover:translate-y-0.5 transition-all max-w-4xl">
                    <div class="md:hidden inline-block bg-black text-white text-xs font-black uppercase px-2 py-0.5 mb-2">
                        Data: {{ date('d/m/Y - H:i', strtotime($evento->data_evento)) }}h
                    </div>

                    <h3 class="text-2xl font-black uppercase tracking-tight mb-2">
                        {{ $evento->titulo }}
                    </h3>

                    <p class="text-sm font-medium text-gray-600 mb-4 leading-relaxed">
                        {{ $evento->descricao }}
                    </p>

                    <div class="flex flex-wrap gap-4 text-xs font-bold uppercase">
                        <span class="bg-gray-100 border border-black px-2 py-1 text-black flex items-center gap-1">
                            🕒 Horário: {{ date('H:i', strtotime($evento->data_evento)) }}h
                        </span>
                        <span class="bg-gray-100 border border-black px-2 py-1 text-black flex items-center gap-1">
                            📍 Local: {{ $evento->local }}
                        </span>
                    </div>
                </div>

            </div>
        @empty
            <div class="bg-yellow-100 border-2 border-yellow-400 p-6 ml-8 max-w-xl">
                <p class="font-bold text-yellow-800">Nenhum evento acadêmico agendado no momento.</p>
            </div>
        @endforelse
    </div>

</div>
@endsection