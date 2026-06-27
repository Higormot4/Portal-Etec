<x-guest-layout>
    <!-- Faixa Superior Vermelha -->
    <div class="bg-red-600 border-b-4 border-black p-5 flex justify-between items-center">
        <h2 class="text-xl font-black uppercase tracking-widest text-white">Nova Senha</h2>
        <div class="w-4 h-4 bg-yellow-400 border-2 border-black rounded-full shadow-[1px_1px_0px_0px_rgba(0,0,0,1)]"></div>
    </div>

    <form method="POST" action="{{ route('password.store') }}" class="p-6 md:p-8 space-y-6">
        @csrf

        <!-- Token de Redefinição Oculto -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Campo: E-mail de Confirmação -->
        <div class="space-y-2">
            <label for="email" class="block text-xs font-black uppercase tracking-wider text-black">Confirme seu E-mail</label>
            <input id="email" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" 
                   class="w-full bg-white text-black font-bold border-3 border-black p-3.5 focus:border-red-600 focus:ring-0 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] transition-all rounded-none text-sm" />
            <x-input-error :messages="$errors->get('email')" class="mt-1 text-red-600 font-black text-xs uppercase tracking-wide" />
        </div>

        <!-- Campo: Nova Senha -->
        <div class="space-y-2">
            <label for="password" class="block text-xs font-black uppercase tracking-wider text-black">Nova Senha de Acesso</label>
            <input id="password" type="password" name="password" required autocomplete="new-password" 
                   class="w-full bg-white text-black font-bold border-3 border-black p-3.5 focus:border-red-600 focus:ring-0 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] transition-all rounded-none text-sm" />
            <x-input-error :messages="$errors->get('password')" class="mt-1 text-red-600 font-black text-xs uppercase tracking-wide" />
        </div>

        <!-- Campo: Confirmar Nova Senha -->
        <div class="space-y-2">
            <label for="password_confirmation" class="block text-xs font-black uppercase tracking-wider text-black">Confirmar Nova Senha</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" 
                   class="w-full bg-white text-black font-bold border-3 border-black p-3.5 focus:border-red-600 focus:ring-0 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] transition-all rounded-none text-sm" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-red-600 font-black text-xs uppercase tracking-wide" />
        </div>

        <!-- Ação de Confirmação (Botão Azul) -->
        <div class="pt-2">
            <button type="submit" class="w-full bg-blue-600 text-white font-black uppercase text-xs tracking-widest py-4 border-3 border-black shadow-[5px_5px_0px_0px_rgba(0,0,0,1)] hover:translate-x-1 hover:translate-y-1 hover:shadow-[0px_0px_0px_0px_rgba(0,0,0,1)] transition-all active:bg-blue-700">
                Redefinir e Salvar Senha
            </button>
        </div>
    </form>
</x-guest-layout>