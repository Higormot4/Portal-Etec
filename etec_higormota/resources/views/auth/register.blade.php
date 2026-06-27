<x-guest-layout>
    <!-- Faixa Superior Vermelha Pop Art: Mantém a distinção visual da tela de login -->
    <div class="bg-red-600 border-b-4 border-black p-5 flex justify-between items-center">
        <h2 class="text-xl font-black uppercase tracking-widest text-white">Novo Cadastro</h2>
        <!-- Detalhe geométrico característico do estilo -->
        <div class="w-4 h-4 bg-yellow-400 border-2 border-black rounded-full shadow-[1px_1px_0px_0px_rgba(0,0,0,1)]"></div>
    </div>

    <!-- Formulário com padding generoso e espaçamento amplo (space-y-6) entre as divs -->
    <form method="POST" action="{{ route('register') }}" class="p-6 md:p-8 space-y-6">
        @csrf

        <!-- Campo: Nome Completo -->
        <div class="space-y-2">
            <label for="name" class="block text-xs font-black uppercase tracking-wider text-black">Nome Completo</label>
            <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" 
                   class="w-full bg-white text-black font-bold border-3 border-black p-3.5 focus:border-red-600 focus:ring-0 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] focus:translate-x-0.5 focus:translate-y-0.5 transition-all rounded-none text-sm" />
            <x-input-error :messages="$errors->get('name')" class="mt-1 text-red-600 font-black text-xs uppercase tracking-wide" />
        </div>

        <!-- Campo: E-mail Institucional -->
        <div class="space-y-2">
            <label for="email" class="block text-xs font-black uppercase tracking-wider text-black">E-mail Institucional</label>
            <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" 
                   class="w-full bg-white text-black font-bold border-3 border-black p-3.5 focus:border-red-600 focus:ring-0 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] focus:translate-x-0.5 focus:translate-y-0.5 transition-all rounded-none text-sm" />
            <x-input-error :messages="$errors->get('email')" class="mt-1 text-red-600 font-black text-xs uppercase tracking-wide" />
        </div>

        <!-- Campo: Senha -->
        <div class="space-y-2">
            <label for="password" class="block text-xs font-black uppercase tracking-wider text-black">Criar Senha de Acesso</label>
            <input id="password" type="password" name="password" required autocomplete="new-password" 
                   class="w-full bg-white text-black font-bold border-3 border-black p-3.5 focus:border-red-600 focus:ring-0 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] focus:translate-x-0.5 focus:translate-y-0.5 transition-all rounded-none text-sm" />
            <x-input-error :messages="$errors->get('password')" class="mt-1 text-red-600 font-black text-xs uppercase tracking-wide" />
        </div>

        <!-- Campo: Confirmar Senha -->
        <div class="space-y-2">
            <label for="password_confirmation" class="block text-xs font-black uppercase tracking-wider text-black">Confirmar a Senha</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" 
                   class="w-full bg-white text-black font-bold border-3 border-black p-3.5 focus:border-red-600 focus:ring-0 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] focus:translate-x-0.5 focus:translate-y-0.5 transition-all rounded-none text-sm" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-red-600 font-black text-xs uppercase tracking-wide" />
        </div>

        <!-- Botão Azul de Envio com efeito de clique afundando para a direita -->
        <div class="pt-2">
            <button type="submit" class="w-full bg-blue-600 text-white font-black uppercase text-xs tracking-widest py-4 border-3 border-black shadow-[5px_5px_0px_0px_rgba(0,0,0,1)] hover:translate-x-1 hover:translate-y-1 hover:shadow-[0px_0px_0px_0px_rgba(0,0,0,1)] transition-all active:bg-blue-700">
                Finalizar Cadastro
            </button>
        </div>

        <!-- Divisor Preto Grosso -->
        <div class="h-1 bg-black mx-2 my-2"></div>

        <!-- Link para voltar ao fluxo de Login -->
        <div class="text-center pt-1">
            <a class="underline text-xs font-black uppercase tracking-widest text-blue-600 hover:text-black transition-colors" href="{{ route('login') }}">
                Já tem uma conta? Faça o Login
            </a>
        </div>
    </form>
</x-guest-layout>