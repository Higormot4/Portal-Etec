<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Propriedade $fillable (Atribuição em Massa):
     * Define quais campos podem ser preenchidos de forma direta no cadastro ou atualização.
     * Protege o sistema contra injeção de colunas maliciosas no banco de dados.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',     // Nome completo do aluno
        'email',    // E-mail institucional/acesso do aluno
        'password', // Senha de acesso (será criptografada)
    ];

    /**
     * Propriedade $hidden:
     * Oculta esses atributos sensíveis quando os dados do usuário são convertidos para Arrays ou JSON.
     * Garante que a senha e o token de sessão nunca vazem nas respostas da aplicação.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Método casts():
     * Define a conversão automática de tipos de dados ao ler ou gravar no banco.
     * Garante que a senha seja salva como 'hashed' (Bcrypt) automaticamente e datas virem objetos Carbon.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed', // Criptografia nativa ativada
        ];
    }

    /**
     * ======================================================================
     * RELACIONAMENTO ENTRE MODELOS (ORM ELOQUENT)
     * ======================================================================
     * Define uma relação do tipo "Um para Muitos" (One-to-Many).
     * Indica que o registro deste aluno específico possui muitas linhas vinculadas
     * na tabela de notas do boletim. Permite fazer chamadas como: $user->notas
     */
    public function notas()
    {
        // HasMany mapeia a relação baseada na chave estrangeira 'user_id' da tabela 'notas'
        return $this->hasMany(Nota::class);
    }
}