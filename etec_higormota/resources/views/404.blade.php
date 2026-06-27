<x-app-layout>
    <div class="min-h-screen bg-[#f0f0f0] flex flex-col items-center justify-center p-4">
        <div class="bg-white border-4 border-black p-12 shadow-[10px_10px_0px_0px_rgba(0,0,0,1)] text-center max-w-lg space-y-6">
            <h1 class="text-9xl font-black uppercase tracking-widest text-red-600">404</h1>
            <h2 class="text-2xl font-black uppercase tracking-wider text-black">Página Não Encontrada!</h2>
            <p class="text-xs font-bold uppercase tracking-wide text-gray-700 leading-relaxed">
                O link que você tentou acessar não existe ou foi movido para outro endereço dentro do portal da ETEC.
            </p>
            <div class="pt-4">
                <a href="{{ route('dashboard') }}" class="inline-block bg-yellow-400 text-black font-black uppercase text-xs tracking-widest px-6 py-3 border-3 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] transition-all">
                    ← Voltar ao Painel
                </a>
            </div>
        </div>
    </div>
</x-app-layout>