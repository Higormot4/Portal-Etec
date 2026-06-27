<x-guest-layout>
    <!-- Faixa Superior: Estilo Pôster Pop Art -->
    <div class="bg-yellow-400 border-b-4 border-black p-5 flex justify-between items-center">
        <h2 class="text-xl font-black uppercase tracking-widest text-black">Recuperar Senha</h2>
        <div class="w-4 h-4 bg-red-600 border-2 border-black rounded-full shadow-[1px_1px_0px_0px_rgba(0,0,0,1)]"></div>
    </div>

    <!-- Formulário com espaçamento amplo -->
    <form method="POST" action="{{ route('password.email') }}" class="p-6 md:p-8 space-y-7">
        @csrf

        <!-- Texto de Instrução bem distribuído e destacado -->
        <div class="text-xs font-bold text-black uppercase tracking-wide leading-relaxed bg-gray-50 border-2 border-black p-4 shadow-[3px_3px_0px_0px_rgba(0,0,0,1)]">
            {{ __('Esqueceu a senha? Sem problemas. Digite seu e-mail institucional e enviaremos um link para você redefinir suas credenciais.') }}
        </div>

        <!-- Status do Envio (Aviso de sucesso do Laravel) -->
        <x-auth-session-status class="mb-2" :status="session('status')" />

        <!-- Campo: E-mail -->
        <div class="space-y-2">
            <label for="email" class="block text-xs font-black uppercase tracking-wider text-black">E-mail Cadastrado</label>
            <input id="email" type="email" name="email" :value="old('email')" required autofocus 
                   class="w-full bg-white text-black font-bold border-3 border-black p-3.5 focus:border-blue-600 focus:ring-0 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] focus:translate-x-0.5 focus:translate-y-0.5 transition-all rounded-none text-sm" />
            <x-input-error :messages="$errors->get('email')" class="mt-1 text-red-600 font-black text-xs uppercase tracking-wide" />
        </div>

        <!-- Botão de Envio (Azul com sombra brutalista) -->
        <div class="pt-2">
            <button type="submit" class="w-full bg-blue-600 text-white font-black uppercase text-xs tracking-widest py-4 border-3 border-black shadow-[5px_5px_0px_0px_rgba(0,0,0,1)] hover:translate-x-1 hover:translate-y-1 hover:shadow-[0px_0px_0px_0px_rgba(0,0,0,1)] transition-all active:bg-blue-700">
                Enviar Link de Recuperação
            </button>
        </div>

        <!-- Linha Divisória -->
        <div class="h-1 bg-black mx-2"></div>

        <!-- Link de Retorno -->
        <div class="text-center">
            <a class="underline text-xs font-black uppercase tracking-widest text-gray-500 hover:text-black transition-colors" href="{{ route('login') }}">
                Voltar para o Login
            </a>
        </div>
    </form>
</x-guest-layout>