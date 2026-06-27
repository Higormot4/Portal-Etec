<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortalController; // Importa o controlador do Higor
use App\Http\Controllers\ProfileController; // Mantém o controlador de perfil do Breeze

/*
|--------------------------------------------------------------------------
| Rotas Públicas do Portal Institucional
|--------------------------------------------------------------------------
| Estas rotas estão abertas para qualquer visitante acessar, sem necessidade
| de login. Elas acionam os métodos específicos do PortalController.
|
*/

// Rota da Página Inicial (Home)
Route::get('/', [PortalController::class, 'index'])->name('home');

// Rota que lista os Cursos Técnicos dinamicamente vindos do MySQL
Route::get('/cursos', [PortalController::class, 'cursos'])->name('cursos');

// Rota que exibe o cronograma de Eventos Acadêmicos
Route::get('/eventos', [PortalController::class, 'eventos'])->name('eventos');

/*
|--------------------------------------------------------------------------
| Rotas Protegidas (Área Restrita do Aluno)
|--------------------------------------------------------------------------
| O grupo de rotas abaixo utiliza os Middlewares ['auth', 'verified']:
| - auth: Bloqueia o acesso se o usuário não estiver logado, redirecionando para a tela de login.
| - verified: Garante que o e-mail foi validado antes de liberar o acesso.
|
*/

Route::middleware(['auth', 'verified'])->group(function () {
    
    // Painel do Aluno: Carrega o boletim com as notas vinculadas ao ID logado
    Route::get('/dashboard', [PortalController::class, 'dashboard'])->name('dashboard');
    
    // Rotas nativas do Laravel Breeze para gerenciamento do perfil do usuário
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Rota de Fallback (Tratamento de Erro 404)
|--------------------------------------------------------------------------
| Se o usuário digitar qualquer URL inexistente no navegador, o Laravel 
| intercepta a requisição e renderiza uma página de erro 404 personalizada,
| mantendo o usuário dentro da identidade visual do portal da ETEC.
|
*/
Route::fallback(function () {
    return response()->view('404', [], 404);
});

// Inclui as rotas automáticas de autenticação do Laravel Breeze (login, register, logout, etc.)
require __DIR__.'/auth.php';