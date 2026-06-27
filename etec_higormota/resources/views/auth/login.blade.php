<x-guest-layout>
    <!-- Faixa Superior: Título com espaçamento de letras e marcador Pop Art -->
    <div class="bg-yellow-400 border-b-4 border-black p-5 flex justify-between items-center">
        <h2 class="text-xl font-black uppercase tracking-widest text-black">Acesso ao Portal</h2>
        <div class="w-4 h-4 bg-red-600 border-2 border-black rounded-full shadow-[1px_1px_0px_0px_rgba(0,0,0,1)]"></div>
    </div>

    <!-- Status de Sessão (Avisos do Laravel) -->
    <x-auth-session-status class="m-6 mb-2" :status="session('status')" />

    <!-- Formulário com padding interno generoso e espaçamento amplo entre os campos -->
    <form method="POST" action="{{ route('login') }}" class="p-6 md:p-8 space-y-7">
        @csrf

        <!-- Campo: E-mail -->
        <div class="space-y-2">
            <label for="email" class="block text-xs font-black uppercase tracking-wider text-black">E-mail do Aluno</label>
            <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" 
                   class="w-full bg-white text-black font-bold border-3 border-black p-3.5 focus:border-blue-600 focus:ring-0 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] focus:translate-x-0.5 focus:translate-y-0.5 transition-all rounded-none text-sm" />
            <x-input-error :messages="$errors->get('email')" class="mt-1 text-red-600 font-black text-xs uppercase tracking-wide" />
        </div>

        <!-- Campo: Senha -->
        <div class="space-y-2">
            <label for="password" class="block text-xs font-black uppercase tracking-wider text-black">Senha de Acesso</label>
            <input id="password" type="password" name="password" required autocomplete="current-password" 
                   class="w-full bg-white text-black font-bold border-3 border-black p-3.5 focus:border-blue-600 focus:ring-0 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] focus:translate-x-0.5 focus:translate-y-0.5 transition-all rounded-none text-sm" />
            <x-input-error :messages="$errors->get('password')" class="mt-1 text-red-600 font-black text-xs uppercase tracking-wide" />
        </div>

        <!-- Seção Intermediária: Checkbox e Esqueci a Senha bem distribuídos -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 pt-1">
            <label for="remember_me" class="inline-flex items-center cursor-pointer group select-none">
                <input id="remember_me" type="checkbox" name="remember" 
                       class="w-5 h-5 bg-white border-3 border-black text-blue-600 focus:ring-0 focus:ring-offset-0 rounded-none shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] cursor-pointer">
                <span class="ms-2 text-xs font-black uppercase tracking-wider text-black group-hover:text-blue-600 transition-colors">Lembrar de mim</span>
            </label>

            @if (Route::has('password.request'))
                <a class="underline text-xs font-black uppercase tracking-wider text-red-600 hover:text-black transition-colors" href="{{ route('password.request') }}">
                    Esqueceu a senha?
                </a>
            @endif
        </div>

        <!-- Botão Principal de Submissão -->
        <div class="pt-2">
            <button type="submit" class="w-full bg-blue-600 text-white font-black uppercase text-xs tracking-widest py-4 border-3 border-black shadow-[5px_5px_0px_0px_rgba(0,0,0,1)] hover:translate-x-1 hover:translate-y-1 hover:shadow-[0px_0px_0px_0px_rgba(0,0,0,1)] transition-all active:bg-blue-700">
                Entrar no Portal
            </button>
        </div>

        <!-- Linha Divisória Marcante -->
        <div class="h-1 bg-black mx-2 my-2"></div>

        <!-- Rodapé do Card: Link alternativo para registro -->
        <div class="text-center pt-1 space-y-2">
            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Ainda não possui cadastro?</p>
            <a href="{{ route('register') }}" class="inline-block bg-white text-black font-black text-xs uppercase tracking-widest px-6 py-2.5 border-3 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:bg-yellow-400 hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] transition-all">
                Criar Conta de Aluno
            </a>
        </div>
    </form>
</x-guest-layout>