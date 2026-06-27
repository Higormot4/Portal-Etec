<x-app-layout>
    <!-- Barra de Navegação Superior Brutalista: Controles de Sessão e Home -->
    <div class="bg-white border-b-4 border-black p-4 sticky top-0 z-50 shadow-[0_4px_0_0_rgba(0,0,0,1)]">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <!-- Link para voltar para a Home principal do site -->
            <a href="/" class="bg-yellow-400 text-black font-black uppercase text-xs tracking-widest px-4 py-2 border-2 border-black shadow-[3px_3px_0px_0px_rgba(0,0,0,1)] hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-[1px_1px_0px_0px_rgba(0,0,0,1)] transition-all">
                ← Voltar para Home
            </a>

            <!-- Formulário Oficial do Breeze para Encerrar Sessão com segurança -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-red-600 text-white font-black uppercase text-xs tracking-widest px-4 py-2 border-2 border-black shadow-[3px_3px_0px_0px_rgba(0,0,0,1)] hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-[1px_1px_0px_0px_rgba(0,0,0,1)] transition-all">
                    Encerrar Sessão ✕
                </button>
            </form>
        </div>
    </div>

    <!-- Cabeçalho do Dashboard -->
    <x-slot name="header">
        <div class="bg-black border-4 border-black p-6 shadow-[6px_6px_0px_0px_rgba(234,179,8,1)] flex items-center justify-between my-2">
            <h2 class="text-2xl font-black uppercase tracking-widest text-white m-0">
                Painel do Aluno
            </h2>
            <span class="bg-yellow-400 text-black text-xs font-black uppercase tracking-wider px-3 py-1 border-2 border-black">
                Online
            </span>
        </div>
    </x-slot>

    <!-- Container Geral de Conteúdo com Espaçamento Robusto -->
    <div class="py-12 px-4 max-w-7xl mx-auto space-y-10">
        
        <!-- Mensagem de Boas-Vindas Estilizada como Banner Pop Art -->
        <div class="bg-blue-600 text-white border-4 border-black p-6 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] relative overflow-hidden">
            <div class="absolute -right-8 -top-8 w-24 h-24 bg-yellow-400 border-4 border-black rounded-full transform rotate-12 hidden md:block"></div>
            <h3 class="text-xl font-black uppercase tracking-wider mb-2">Bem-vindo de volta, {{ Auth::user()->name }}!</h3>
            <p class="text-xs font-bold uppercase tracking-wide opacity-90">Sua sessão foi iniciada com sucesso no portal acadêmico.</p>
        </div>

        <!-- Grid de Cards Modificado: Dados Fixos e Informativos (Sem botões soltos) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Card 1: Status de Projetos (Amarelo) -->
            <div class="bg-yellow-400 text-black border-4 border-black p-6 shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] flex flex-col justify-between space-y-4">
                <div class="space-y-2">
                    <h4 class="text-lg font-black uppercase tracking-wider">Sistemas ETEC</h4>
                    <p class="text-xs font-bold uppercase tracking-normal leading-relaxed text-gray-900">Ambiente de desenvolvimento e entrega ativa de software.</p>
                </div>
                <!-- Indicador de dado fixo com badge marcante -->
                <div class="bg-white border-3 border-black p-3 text-center font-black uppercase tracking-widest text-sm shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                    02 Projetos Ativos
                </div>
            </div>

            <!-- Card 2: Frequência / Presença (Vermelho) -->
            <div class="bg-red-600 text-white border-4 border-black p-6 shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] flex flex-col justify-between space-y-4">
                <div class="space-y-2">
                    <h4 class="text-lg font-black uppercase tracking-wider">Frequência Geral</h4>
                    <p class="text-xs font-bold uppercase tracking-normal leading-relaxed opacity-95">Sua taxa acumulada de presença nas disciplinas do módulo atual.</p>
                </div>
                <!-- Indicador de dado fixo -->
                <div class="bg-black text-white border-3 border-white p-3 text-center font-black uppercase tracking-widest text-sm shadow-[2px_2px_0px_0px_rgba(255,255,255,0.2)]">
                    94% de Presença
                </div>
            </div>

            <!-- Card 3: Rendimento Acadêmico (Branco) -->
            <div class="bg-white text-black border-4 border-black p-6 shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] flex flex-col justify-between space-y-4">
                <div class="space-y-2">
                    <h4 class="text-lg font-black uppercase tracking-wider">Desempenho MB</h4>
                    <p class="text-xs font-bold uppercase tracking-normal leading-relaxed text-gray-700">Média geral baseada nas menções parciais registradas.</p>
                </div>
                <!-- Indicador de dado fixo -->
                <div class="bg-blue-600 text-white border-3 border-black p-3 text-center font-black uppercase tracking-widest text-sm shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                    Status: Regularizado
                </div>
            </div>

        </div>

        <!-- Seção de Avisos Gerais do Portal -->
        <div class="bg-white border-4 border-black shadow-[10px_10px_0px_0px_rgba(0,0,0,1)] overflow-hidden">
            <div class="bg-black text-white p-4 font-black uppercase tracking-widest text-sm border-b-4 border-black">
                Mural de Avisos Importantes
            </div>
            <div class="p-6 space-y-4">
                <div class="border-l-4 border-red-600 pl-4 py-1 space-y-1">
                    <span class="text-[10px] font-black text-red-600 uppercase tracking-wider">Urgente</span>
                    <h5 class="text-xs font-black uppercase tracking-wide text-black">Atenção ao prazo final de envio do projeto de TCC!</h5>
                </div>
                <div class="h-0.5 bg-gray-200"></div>
                <div class="border-l-4 border-blue-600 pl-4 py-1 space-y-1">
                    <span class="text-[10px] font-black text-blue-600 uppercase tracking-wider">Secretaria</span>
                    <h5 class="text-xs font-black uppercase tracking-wide text-black">Renovação de matrícula para o próximo semestre liberada no sistema.</h5>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>