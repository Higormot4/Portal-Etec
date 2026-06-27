<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Acesso ao Portal - ETEC</title>

    <!-- Importação do Tailwind e Scripts via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<!-- Fundo cinza claro texturizado para dar contraste ao card branco -->
<body class="bg-[#f0f0f0] text-black font-sans antialiased min-h-screen flex flex-col justify-center items-center p-6 relative">

    <!-- Formas Geométricas Abstratas de Fundo (Mondrian Style) -->
    <div class="absolute top-12 left-12 w-16 h-16 bg-red-600 border-4 border-black hidden lg:block transform -rotate-12 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]"></div>
    <div class="absolute bottom-16 left-24 w-20 h-20 bg-yellow-400 border-4 border-black rounded-full hidden lg:block shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]"></div>
    <div class="absolute top-24 right-24 w-28 h-14 bg-blue-600 border-4 border-black hidden lg:block transform rotate-6 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]"></div>

    <!-- Container Principal: 100% Reto, Borda Grossa e Sombra Brutalista -->
    <div class="w-full max-w-md bg-white border-4 border-black rounded-none shadow-[10px_10px_0px_0px_rgba(0,0,0,1)] overflow-hidden z-10">
        <!-- O slot injeta o conteúdo específico de cada tela aqui dentro -->
        {{ $slot }}
    </div>
</body>
</html>