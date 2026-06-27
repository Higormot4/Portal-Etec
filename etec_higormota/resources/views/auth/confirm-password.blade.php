<x-guest-layout>
    <!-- Faixa Superior Preta de Segurança -->
    <div class="bg-black border-b-4 border-black p-5 flex justify-between items-center">
        <h2 class="text-xl font-black uppercase tracking-widest text-white">Segurança Ativa</h2>
        <div class="w-4 h-4 bg-red-600 border-2 border-white rounded-full"></div>
    </div>

    <form method="POST" action="{{ route('password.confirm') }}" class="p-6 md:p-8 space-y-7">
        @csrf

        <!-- Alerta de Área Restrita -->
        <div class="text-xs font-bold text-black uppercase tracking-wide leading-relaxed bg-red-50 border-2 border-red-600 p-4 shadow-[3px_3px_0px_0px_rgba(220,38,38,1)]">
            {{ __('Esta é uma área de confirmação estrita. Por favor, insira sua senha de acesso antes de continuar com a operação desejada.') }}
        </div>

        <!-- Campo: Senha Atual -->
        <div class="space-y-2">
            <label for="password" class="block text-xs font-black uppercase tracking-wider text-black">Sua Senha Atual</label>
            <input id="password" type="password" name="password" required autocomplete="current-password" 
                   class="w-full bg-white text-black font-bold border-3 border-black p-3.5 focus:border-red-600 focus:ring-0 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] transition-all rounded-none text-sm" />
            <x-input-error :messages="$errors->get('password')" class="mt-1 text-red-600 font-black text-xs uppercase tracking-wide" />
        </div>

        <!-- Botão Vermelho de Confirmação -->
        <div class="pt-2">
            <button type="submit" class="w-full bg-red-600 text-white font-black uppercase text-xs tracking-widest py-4 border-3 border-black shadow-[5px_5px_0px_0px_rgba(0,0,0,1)] hover:translate-x-1 hover:translate-y-1 hover:shadow-[0px_0px_0px_0px_rgba(0,0,0,1)] transition-all active:bg-red-700">
                Confirmar Identidade
            </button>
        </div>
    </form>
</x-guest-layout>