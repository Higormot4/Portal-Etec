<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal ETEC - Higor Mota</title>
    <!-- Carrega o Tailwind CSS e o Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<!-- Fundo obrigatoriamente Branco e Fontes Principais em Preto -->
<body class="bg-white text-black font-sans min-h-screen flex flex-col justify-between">

    <!-- NAV BAR: Linha preta grossa em cima com detalhes em Amarelo e Azul -->
    <header class="border-b-4 border-black bg-white sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Logo com Destaque Vermelho -->
            <a href="{{ route('home') }}" class="text-2xl font-black uppercase tracking-wider">
                ETEC <span class="text-red-6xl text-red-600">.</span>
            </a>

            <!-- Links de Navegação com hover colorido -->
            <nav class="flex items-center space-x-8 font-bold">
                <a href="{{ route('home') }}" class="hover:text-blue-600 transition-colors">Início</a>
                <a href="{{ route('cursos') }}" class="hover:text-yellow-500 transition-colors">Cursos</a>
                <a href="{{ route('eventos') }}" class="hover:text-red-600 transition-colors">Eventos</a>
                
                @auth
                    <!-- Se o aluno estiver logado: Botão Azul -->
                    <a href="{{ route('dashboard') }}" class="bg-blue-600 text-white px-4 py-2 border-2 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] transition-all">
                        Área do Aluno
                    </a>
                @else
                    <!-- Se não estiver logado: Botão Amarelo -->
                    <a href="{{ route('login') }}" class="bg-yellow-400 text-black px-4 py-2 border-2 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] transition-all">
                        Login Aluno
                    </a>
                @endauth
            </nav>
        </div>
    </header>

    <!-- CONTEÚDO DINÂMICO DAS PÁGINAS -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- FOOTER: Base preta marcante com detalhes Amarelos e Vermelhos -->
    <footer class="bg-black text-white py-8 mt-12 border-t-4 border-yellow-400">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-4">
            <div>
                <p class="font-black text-lg uppercase tracking-wide">ETEC Zona Leste</p>
                <p class="text-sm text-gray-400">Projeto Desenvolvido por Higor Mota &copy; 2026</p>
            </div>
            <!-- Detalhe decorativo Pop Art (Blocos de Cores) -->
            <div class="flex space-x-2">
                <div class="w-6 h-6 bg-red-600 border border-white"></div>
                <div class="w-6 h-6 bg-blue-600 border border-white"></div>
                <div class="w-6 h-6 bg-yellow-400 border border-white"></div>
            </div>
        </div>
    </footer>

</body>
</html>