@extends('layouts.portal')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-12 space-y-16">

    <!-- 1. SEÇÃO HERO: Grande impacto visual com blocos assimétricos -->
    <section class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center pt-6">
        <div class="lg:col-span-7 space-y-6">
            <!-- Badge Amarela Chamativa -->
            <span class="inline-block bg-yellow-400 text-black font-black uppercase tracking-wider px-3 py-1 border-2 border-black shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] text-sm">
                Ensino Técnico Público e Gratuito
            </span>
            <h1 class="text-5xl md:text-6xl font-black uppercase tracking-tight leading-none">
                Construa seu <span class="bg-blue-600 text-white px-2 inline-block transform -rotate-1">Futuro</span> na ETEC Zona Leste
            </h1>
            <p class="text-lg text-gray-7xl font-medium max-w-xl">
                Formação profissional de alto nível com laboratórios modernos, professores qualificados e inserção rápida no mercado de trabalho técnico.
            </p>
            <div class="flex flex-wrap gap-4 pt-2">
                <a href="{{ route('cursos') }}" class="bg-red-600 text-white font-black uppercase tracking-wide px-6 py-4 border-3 border-black shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] hover:translate-x-1 hover:translate-y-1 hover:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] transition-all">
                    Conhecer os Cursos
                </a>
                <a href="{{ route('eventos') }}" class="bg-white text-black font-black uppercase tracking-wide px-6 py-4 border-3 border-black shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] hover:translate-x-1 hover:translate-y-1 hover:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] transition-all hover:bg-yellow-400">
                    Agenda de Eventos
                </a>
            </div>
        </div>

        <!-- Bloco de Imagem Abstrato/Pop Art à Direita -->
        <div class="lg:col-span-5 relative">
            <div class="absolute inset-0 bg-yellow-400 border-4 border-black transform translate-x-4 translate-y-4 -z-10"></div>
            <div class="bg-white border-4 border-black p-8 space-y-6 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)]">
                <div class="w-12 h-12 bg-red-600 border-2 border-black rounded-full"></div>
                <h3 class="text-3xl font-black uppercase">Vestibulinho 2026</h3>
                <p class="font-bold text-gray-600">Prepare-se para ingressar na instituição que é referência no desenvolvimento tecnológico de São Paulo.</p>
                <div class="h-2 bg-black w-full"></div>
            </div>
        </div>
    </section>

    <hr class="border-2 border-black">

    <!-- 2. SEÇÃO DE INFORMAÇÕES RÁPIDAS (Cards Coloridos Dinâmicos) -->
    <section class="space-y-8">
        <h2 class="text-4xl font-black uppercase tracking-tight">Por que estudar aqui?</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card Azul -->
            <div class="bg-white border-3 border-black p-6 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] transition-all group">
                <div class="w-12 h-12 bg-blue-600 border-2 border-black flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <span class="text-white font-black text-xl">01</span>
                </div>
                <h4 class="text-xl font-black uppercase mb-2">Estrutura de Ponta</h4>
                <p class="text-sm font-medium text-gray-600">Laboratórios de informática equipados, redes locais estruturadas e salas de aula projetadas para o aprendizado prático.</p>
            </div>

            <!-- Card Vermelho -->
            <div class="bg-white border-3 border-black p-6 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] transition-all group">
                <div class="w-12 h-12 bg-red-600 border-2 border-black flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <span class="text-white font-black text-xl">02</span>
                </div>
                <h4 class="text-xl font-black uppercase mb-2">Foco no Mercado</h4>
                <p class="text-sm font-medium text-gray-600">Parcerias com empresas locais e preparação direcionada para vagas de estágio e programas de Jovem Aprendiz.</p>
            </div>

            <!-- Card Amarelo -->
            <div class="bg-white border-3 border-black p-6 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] transition-all group">
                <div class="w-12 h-12 bg-yellow-400 border-2 border-black flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <span class="text-black font-black text-xl">03</span>
                </div>
                <h4 class="text-xl font-black uppercase mb-2">Corpo Docente</h4>
                <p class="text-sm font-medium text-gray-600">Professores especialistas atuantes no mercado de engenharia de software, administração e lógica aplicada.</p>
            </div>
        </div>
    </section>

</div>
@endsection