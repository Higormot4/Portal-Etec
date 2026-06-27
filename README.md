# ⚡ Portal Acadêmico ETEC

Sistema web de autenticação e painel acadêmico desenvolvido com **Laravel**, utilizando o **Laravel Breeze** como base para autenticação e uma interface totalmente personalizada com **Tailwind CSS**, seguindo a estética **Neo-Brutalist**.

> Um projeto focado em segurança, arquitetura MVC e uma experiência visual moderna e impactante.

---


### Login

```text
docs/images/login.png
```

### Dashboard

```text
docs/images/dashboard.png
```

---

## ✨ Funcionalidades

* 🔐 Login e cadastro de usuários
* 👤 Autenticação com Laravel Breeze
* 📧 Verificação de e-mail
* 🔑 Recuperação de senha
* 🛡️ Proteção CSRF
* 🔒 Senhas criptografadas (Bcrypt)
* 📊 Dashboard do usuário autenticado
* 💾 Persistência de dados com Eloquent ORM
* 🎨 Interface Neo-Brutalist desenvolvida do zero

---

## 🎨 Design

A interface foi construída seguindo o conceito **Neo-Brutalist**, priorizando personalidade e contraste.

### Características

* Bordas pretas espessas
* Sombras sólidas (Hard Shadows)
* Cores vibrantes
* Tipografia pesada
* Caixa alta
* Microinterações nos componentes
* Layout responsivo

---

## 🛠 Tecnologias

| Tecnologia     | Descrição               |
| -------------- | ----------------------- |
| Laravel        | Framework PHP           |
| Laravel Breeze | Sistema de autenticação |
| Tailwind CSS   | Estilização             |
| Blade          | Engine de templates     |
| Vite           | Build do Front-end      |
| Eloquent ORM   | Manipulação do banco    |
| MySQL          | Banco de dados          |

---

## 🏗 Arquitetura

O projeto segue o padrão **MVC (Model-View-Controller)**.

```text
           Request
              │
              ▼
        Controller
              │
      ┌───────┴────────┐
      ▼                ▼
    Model            View
      │
      ▼
 Banco de Dados
```

---

## 📂 Estrutura das Views

```text
resources/
└── views/
    ├── auth/
    │   ├── login.blade.php
    │   ├── register.blade.php
    │   ├── forgot-password.blade.php
    │   ├── reset-password.blade.php
    │   ├── confirm-password.blade.php
    │   └── verify-email.blade.php
    │
    └── dashboard.blade.php
```

---

## 🗄 Banco de Dados

A autenticação utiliza a tabela `users`.

| Campo             | Tipo      | Descrição               |
| ----------------- | --------- | ----------------------- |
| name              | String    | Nome do usuário         |
| email             | String    | E-mail único            |
| password          | String    | Senha criptografada     |
| email_verified_at | Timestamp | Controle de verificação |

---

## 🔒 Segurança

O sistema utiliza os recursos nativos do Laravel para garantir maior segurança.

* Proteção contra CSRF
* Hash de senhas com Bcrypt
* Sessões autenticadas
* Middleware de autenticação
* Validação de formulários
* Proteção contra SQL Injection através do Eloquent ORM

---

# 🚀 Instalação

## 1️⃣ Clone o projeto

```bash
git clone https://github.com/seu-usuario/portal-academico.git

cd portal-academico
```

---

## 2️⃣ Instale as dependências

```bash
composer install

npm install
```

---

## 3️⃣ Configure o ambiente

Crie o arquivo `.env`.

```bash
cp .env.example .env
```

Depois configure:

```env
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

---

## 4️⃣ Gere a chave da aplicação

```bash
php artisan key:generate
```

---

## 5️⃣ Execute as migrations

```bash
php artisan migrate
```

---

## 6️⃣ Inicie os servidores

### Backend

```bash
php artisan serve
```

### Front-end

```bash
npm run dev
```

A aplicação estará disponível em:

```text
http://localhost:8000
```

---

## 🛠 Comandos úteis

### Limpar cache

```bash
php artisan optimize:clear
```

### Recriar o banco

```bash
php artisan migrate:fresh
```

### Recriar o banco com Seeders

```bash
php artisan migrate:fresh --seed
```

---

## 📁 Estrutura do Projeto

```text
app/
bootstrap/
config/
database/
public/
resources/
routes/
storage/
tests/
vendor/
```

---

## 🎯 Objetivos

Este projeto foi desenvolvido para colocar em prática conceitos como:

* Laravel
* Arquitetura MVC
* Autenticação de usuários
* Eloquent ORM
* Tailwind CSS
* Segurança em aplicações web
* Desenvolvimento de interfaces modernas

---

## 👨‍💻 Autor

Desenvolvido por **Higor Mota**.

Se este projeto foi útil para você, considere deixar uma ⭐ no repositório.
