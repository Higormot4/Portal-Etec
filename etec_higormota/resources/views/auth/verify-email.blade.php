<x-guest-layout>
    <!-- Faixa Superior Azul -->
    <div class="bg-blue-600 border-b-4 border-black p-5 flex justify-between items-center">
        <h2 class="text-xl font-black uppercase tracking-widest text-white">Validar Conta</h2>
        <div class="w-4 h-4 bg-yellow-400 border-2 border-black rounded-full shadow-[1px_1px_0px_0px_rgba(0,0,0,1)]"></div>
    </div>

    <div class="p-6 md:p-8 space-y-6">
        <!-- Texto informativo de validação -->
        <div class="text-xs font-bold text-black uppercase tracking-wide leading-relaxed bg-blue-50 border-2 border-blue-600 p-4 shadow-[3px_3px_0px_0px_rgba(37,99,235,1)]">
            {{ __('Obrigado por se cadastrar! Antes de navegar, você precisa validar seu e-mail institucional clicando no link que enviamos para sua caixa de entrada.') }}
        </div>

        <!-- Notificação de Reenvio do Link com Sucesso -->
        @if (session('status') == 'verification-link-sent')
            <div class="font-black uppercase text-[11px] text-green-700 bg-green-50 border-2 border-green-600 p-3 shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                {{ __('Um novo link de verificação foi disparado para o e-mail informado no cadastro.') }}
            </div>
        @endif

        <!-- Ações: Reenvio e Logout organizados em Grid Reto -->
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2">
            <!-- Formulário de Reenvio (Botão Amarelo) -->
            <form method="POST" action="{{ route('verification.send') }}" class="w-full sm:w-auto">
                @csrf
                <button type="submit" class="w-full bg-yellow-400 text-black font-black uppercase text-xs tracking-widest px-4 py-3.5 border-3 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] transition-all">
                    Reenviar E-mail
                </button>
            </form>

            <!-- Botão de Sair do Sistema (Link Vermelho) -->
            <form method="POST" action="{{ route('logout') }}" class="w-full sm:w-auto text-center">
                @csrf
                <button type="submit" class="underline text-xs font-black uppercase tracking-wider text-red-600 hover:text-black transition-colors">
                    Sair do Sistema
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>