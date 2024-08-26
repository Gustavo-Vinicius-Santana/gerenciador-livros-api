# Projeto Gerenciador de livros API

Este é o repositório do projeto gerenciador de livros, uma aplicação desenvolvida para gerenciar os livros de um usuario. Onde é possivel cadastrar livros, autores e editoras, podendo consulta-los e organiza-los.

## Instalações Obrigatórias

Antes de começar a usar o projeto gerenciador de livros, certifique-se de ter as seguintes instalações:

- **Git**: Para clonar o repositório.
- **Composer**: Para instalar as dependências do projeto.

## Passo a Passo

Siga estas etapas para configurar e executar o projeto gerenciador de livros:

1. **Clonar o Repositório**:
   ```bash
   git clone https://github.com/Gustavo-Vinicius-Santana/gerenciador-livros-api

2. **Instalar o Composer na Pasta do Repositório:**:
   ```bash
   cd gerenciador-livros-api
   composer install

3. **Transformar o .env.example em .env:**:
   ```bash
    cp .env.example .env

4. **Gerar uma Chave de Aplicativo:**:
   ```bash
   php artisan key:generate

5. **Realizar as Migrações:**:
   ```bash
   php artisan migrate

6. **Rodar o Projeto:**:
   ```bash
   php artisan serve

## Funcionalidades
- CRUD de livros
- CRUD de autores
- CRUD de editoras
