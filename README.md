```markdown
# ⚡ Portal Acadêmico ETEC - Controle de Acesso & Dashboard

Este é um ecossistema completo de autenticação, segurança e painel administrativo desenvolvido em **Laravel** utilizando a fundação oficial do **Laravel Breeze**. O projeto adota uma arquitetura MVC rígida integrada a uma interface customizada do zero com **Tailwind CSS**, implementando de forma estrita a estética **Neo-Brutalist / Pop Art**.

---

## 🎨 Conceito e Diretrizes de Design (Neo-Brutalismo)

A interface rompe deliberadamente com as tendências minimalistas e suavizadas da web moderna. O design foi construído sobre cinco pilares geométricos e visuais:
* **Bordas de Alta Espessura:** Contêineres, inputs e blocos utilizam delimitações retas de impacto (`border-3` e `border-4` na cor preta pura).
* **Sombras Sólidas (Hard Shadows):** Ausência total de gradientes ou desfoque (*blur*). As sombras são deslocadas nos eixos X e Y de forma sólida (`shadow-[6px_6px_0px_0px_rgba(0,0,0,1)]`).
* **Cores Saturadas de Alto Contraste:** Uso de paleta primária e blocos cromáticos bem definidos (Amarelo `bg-yellow-400`, Vermelho `bg-red-600`, Azul `bg-blue-600` e fundos claros `bg-[#f0f0f0]`).
* **Tipografia e Caixa Alta:** Títulos com peso máximo estrutural (`font-black`), transformados em caixa alta (`uppercase`) e com espaçamento entre caracteres expandido (`tracking-widest`).
* **Física de Cliques (Microinterações):** Inputs e botões possuem comportamento mecânico. Ao receber foco ou clique, realizam uma transição de translação que simula o ato de afundar a peça (`hover:translate-x-*` / `active:scale-*`).

---

## 🏗️ Arquitetura Técnica e Banco de Dados

A aplicação utiliza o ecossistema nativo do Laravel para garantir alto desempenho, segurança contra vulnerabilidades comuns (como SQL Injection e CSRF) e gerenciamento de estado:

### 1. Camada de Persistência (Banco de Dados)
O sistema mapeia e persiste dados estruturados na tabela `users`, gerenciada via Eloquent ORM. Cada registro armazena:
* `name` (String): Nome completo do aluno.
* `email` (String UNIQUE): E-mail institucional utilizado como chave de identificação única.
* `password` (String Hashed): Hash de segurança da credencial.
* `email_verified_at` (Timestamp): Controle de segurança para validação de contas.

### 2. Segurança e Controle de Fluxo
* **Proteção CSRF:** Todos os formulários incluem a diretiva `@csrf` para impedir ataques de falsificação de solicitação entre sites.
* **Criptografia de Senhas:** Armazenamento seguro utilizando o algoritmo de hashing **Bcrypt**.
* **Gerenciamento de Sessão Dinâmico:** Utilização de Sessions do Laravel para controle de estado. O painel administrativo consome dados em tempo real da sessão ativa via fachadas de autenticação (`Auth::user()`).

---

## 📂 Mapeamento do Escopo de Telas Customizadas

O diretório de views foi inteiramente refatorado para garantir consistência visual em todos os fluxos de navegação:

* **`auth/login.blade.php`**: Portal de acesso principal com validação de credenciais.
* **`auth/register.blade.php`**: Tela de criação de novas contas integrada à persistência do banco.
* **`auth/forgot-password.blade.php`**: Interface de solicitação de recuperação de credenciais esquecidas.
* **`auth/reset-password.blade.php`**: Formulário seguro de redefinição de senha via token.
* **`auth/confirm-password.blade.php`**: Barreira de segurança que exige revalidação de senha antes de ações críticas.
* **`auth/verify-email.blade.php`**: Tela de aviso e bloqueio para validação de e-mail institucional.
* **`dashboard.blade.php`**: Painel central do aluno. Exibe o nome do usuário logado dinamicamente direto do banco de dados, mural de avisos da coordenação e indicadores fixos de rendimento acadêmico.

---

## 🚀 Guia de Instalação e Execução Local

Siga o passo a passo para configurar o ambiente de desenvolvimento do zero:

### 1. Clonar o Repositório
```bash
git clone [https://github.com/seu-usuario/nome-do-repositorio.git](https://github.com/seu-usuario/nome-do-repositorio.git)
cd nome-do-repositorio

```

### 2. Instalação de Dependências

Instale os pacotes de backend (PHP/Laravel) e as dependências de frontend (Tailwind/Vite):

```bash
composer install
npm install

```

### 3. Configuração do Ambiente (.env)

Crie o arquivo de configuração local a partir do exemplo estruturado:

```bash
cp .env.example .env

```

*Abra o arquivo `.env` gerado e insira o nome e credenciais do seu banco de dados local nas propriedades `DB_DATABASE`, `DB_USERNAME` e `DB_PASSWORD`.*

### 4. Inicialização do Sistema

Gere a chave criptográfica única da aplicação e execute as migrações para estruturar as tabelas do banco de dados:

```bash
php artisan key:generate
php artisan migrate

```

### 5. Execução dos Servidores

Abra dois terminais simultâneos para rodar os compiladores ativos:

* **Terminal 1 (Servidor Backend):**

```bash
  php artisan serve

```

* **Terminal 2 (Compilador de Estilos Tailwind/Vite):**

```bash
  npm run dev

```

Acesse a aplicação localmente através do endereço: `http://localhost:8000`.

---

## 🛠️ Comandos Úteis para Manutenção (CLI)

Se precisar resetar o banco de dados ou limpar os caches do framework durante a avaliação:

* **Resetar e reexecutar migrations:** `php artisan migrate:fresh`
* **Limpar cache de rotas e views:** `php artisan optimize:clear`

```

```
