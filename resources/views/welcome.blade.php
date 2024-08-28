<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>gerenciador de livros</title>
        <link href="{{ asset('app.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <header>
            <h1>Gerenciador de livros API</h1>

            <nav>
                <li><a href="#livro">Livros</a></li>
                <li><a href="#autor">Autor</a></li>
                <li><a href="#editora">Editora</a></li>
            </nav>
        </header>

        <main>
            <div class="box-principal">
                <div class="box-conteudo">
                    <h2>Sobre:</h2>
                    <p>Bem-vindo à documentação da API de Gerenciamento de Livros, Editoras e Autores. Nela, você poderá realizar o CRUD(create, read, update e delete) dos livros, autores e editoras através dos endpoints. Abaixo estão os endpoints disponíveis.</p>
                </div>

                <div class="box-endpoint">
                    <h2 id="livro" class="titulo-end-point">CRUD livros</h2>
                    <h3>Listar Livros</h3>
                    <ul class="lista-caracteristica-rota">
                        <li>
                            <label>Método:</label> <p>GET</p>
                        </li>

                        <li>
                            <label>Endpoint:</label> <p>api/livro</p>
                        </li>

                        <li>
                            <label>Resposta JSON:</label>
                        </li>
                    </ul>

                    <pre>
                        <code>
[
  {
    "id": 1,
    "titulo": "Livro Exemplo",
    "autores_id": 1,
    "editoras_id": 1,
    "ano_lancamento": 2024
  }
]
                        </code>
                    </pre>

                </div>

                <div class="box-endpoint">
                    <h3>Criar Livro</h3>
                    <ul class="lista-caracteristica-rota">
                        <li>
                            <label>Método:</label> <p>POST</p>
                        </li>

                        <li>
                            <label>Endpoint:</label> <p>api/livro</p>
                        </li>

                        <li>
                            <label>JSON:</label>
                        </li>
                    </ul>

                    <pre>
                        <code>
{
    "titulo": "Livro Exemplo",
    "autores_id": 1,
    "editoras_id": 1,
    "ano_lancamento": 2024
}
                        </code>
                    </pre>

                </div>

                <div class="box-endpoint">
                    <h3>Exibir Livro</h3>
                    <ul class="lista-caracteristica-rota">
                        <li>
                            <label>Método:</label> <p>GET</p>
                        </li>

                        <li>
                            <label>Endpoint:</label> <p>api/livro/{id}</p>
                        </li>

                        <li>
                            <label>Resposta JSON:</label>
                        </li>
                    </ul>

                    <pre>
                        <code>
{
  "id": 1,
  "titulo": "Livro Exemplo",
  "autor_id": 1,
  "editora_id": 1,
  "ano_lancamento": 2024
}
                        </code>
                    </pre>

                </div>

                <div class="box-endpoint">
                    <h3>Atualizar Livro</h3>
                    <ul class="lista-caracteristica-rota">
                        <li>
                            <label>Método:</label> <p>PUT</p>
                        </li>

                        <li>
                            <label>Endpoint:</label> <p>api/livro/{id}</p>
                        </li>

                        <li>
                            <label>JSON:</label>
                        </li>
                    </ul>

                    <pre>
                        <code>
{
  "titulo": "Livro Atualizado",
  "autor_id": 2,
  "editora_id": 2,
  "ano_lancamento": 2024
}
                        </code>
                    </pre>
                </div>

                <div class="box-endpoint">
                    <h3>Deletar Livro</h3>
                        <ul class="lista-caracteristica-rota">
                            <li>
                                <label>Método:</label> <p>DELETE</p>
                            </li>

                            <li>
                                <label>Endpoint:</label> <p>api/livro/{id}</p>
                            </li>

                            <li>
                                <label>Resposta JSON:</label>
                            </li>
                        </ul>

                        <pre>
                            <code>
                            No body returned for response
                            </code>
                        </pre>

                </div>

                <div class="box-endpoint">
                    <h3>Detalhes do Livro</h3>
                    <ul class="lista-caracteristica-rota">
                        <li>
                            <label>Método:</label> <p>GET</p>
                        </li>

                        <li>
                            <label>Endpoint:</label> <p>api/livro/livroDetail/{id}</p>
                        </li>

                        <li>
                            <label>Resposta JSON:</label>
                        </li>
                    </ul>

                    <pre>
                        <code>
{
"livro": {
    "id": 1,
    "titulo": "titulo livro teste",
    "resumo": "resumo livro teste",
    "ano_lancamento": "2024",
    "autores_id": 2,
    "editoras_id": 2,
},
"editora": {
    "id": 2,
    "nome": "editora teste",
},
"autor": {
    "id": 2,
    "nome": "autor teste",
}
}
                        </code>
                    </pre>

                </div>

                <div class="box-endpoint">
                    <h3>Buscar Livros</h3>
                    <ul class="lista-caracteristica-rota">
                        <li>
                            <label>Método:</label> <p>GET</p>
                        </li>

                        <li>
                            <label>Endpoint:</label> <p>api/livros/busca</p>
                        </li>

                        <li>
                            <label>Parâmetros:</label> <p>titulo</p>
                        </li>

                        <li>
                            <label>Requisição:</label> <p>http://127.0.0.1:8000/api/livros/busca?titulo=teste</p>
                        </li>

                        <li>
                            <label>Resposta JSON:</label>
                        </li>
                    </ul>

                    <pre>
                        <code>
{
"livros":[
	{
    "id": 1,
    "titulo": "titulo livro teste",
    "resumo": "resumo livro teste",
    "ano_lancamento": "2024",
    "autores_id": 2,
    "editoras_id": 2,
	}
    ]
}
                        </code>
                    </pre>

                </div>

                <div class="box-endpoint">
                    <h3>Listar Autores</h3>
                    <ul class="lista-caracteristica-rota">
                        <li>
                            <label>Método:</label> <p>GET</p>
                        </li>

                        <li>
                            <label>Endpoint:</label> <p>api/autor</p>
                        </li>

                        <li>
                            <label>Resposta JSON:</label>
                        </li>
                    </ul>

                    <pre>
                        <code>
[
  {
    "id": 1,
    "nome": "Autor Exemplo"
  }
]
                        </code>
                    </pre>
                </div>

                <div class="box-endpoint">
                    <h2 id="autor" class="titulo-end-point">CRUD autor</h2>
                    <h3>Criar Autor</h3>
                    <ul class="lista-caracteristica-rota">
                        <li>
                            <label>Método:</label> <p>POST</p>
                        </li>

                        <li>
                            <label>Endpoint:</label> <p>api/autor</p>
                        </li>

                        <li>
                            <label>JSON:</label>
                        </li>
                    </ul>

                    <pre>
                        <code>
{
    "nome": "Novo Autor"
}
                        </code>
                    </pre>

                </div>

                <div class="box-endpoint">
                    <h3>Exibir Autor</h3>
                    <ul class="lista-caracteristica-rota">
                        <li>
                            <label>Método:</label> <p>GET</p>
                        </li>

                        <li>
                            <label>Endpoint:</label> <p>api/autor/{id}</p>
                        </li>

                        <li>
                            <label>Resposta JSON:</label>
                        </li>
                    </ul>

                    <pre>
                        <code>
{
    "id": 1,
    "nome": "Autor Exemplo"
}
                        </code>
                    </pre>

                </div>

                <div class="box-endpoint">
                    <h3>Atualizar Autor</h3>
                    <ul class="lista-caracteristica-rota">
                        <li>
                            <label>Método:</label> <p>PUT</p>
                        </li>

                        <li>
                            <label>Endpoint:</label> <p>api/autor/{id}</p>
                        </li>

                        <li>
                            <label>JSON:</label>
                        </li>
                    </ul>

                    <pre>
                        <code>
{
    "nome": "Autor Atualizado"
}
                        </code>
                    </pre>

                </div>

                <div class="box-endpoint">
                    <h3>Deletar Autor</h3>
                    <ul class="lista-caracteristica-rota">
                        <li>
                            <label>Método:</label> <p>DELETE</p>
                        </li>

                        <li>
                            <label>Endpoint:</label> <p>api/autor/{id}</p>
                        </li>

                        <li>
                            <label>Resposta JSON:</label>
                        </li>
                    </ul>

                    <pre>
                        <code>
                        No body returned for response
                        </code>
                    </pre>

                </div>

                <div class="box-endpoint">
                    <h3>Livros do Autor</h3>
                    <ul class="lista-caracteristica-rota">
                        <li>
                            <label>Método:</label> <p>GET</p>
                        </li>

                        <li>
                            <label>Endpoint:</label> <p>api/autor/autorLivros/{id}</p>
                        </li>

                        <li>
                            <label>Resposta JSON:</label>
                        </li>
                    </ul>

                    <pre>
                        <code>
{
"autor": {
	"id": 2,
	"nome": "autor teste",
},
"livros": [
    {
    "id": 1,
    "titulo": "titulo livro teste",
    "resumo": "resumo livro teste",
    "ano_lancamento": "2024",
    "autores_id": 2,
    "editoras_id": 2,
    }
]
}
                        </code>
                    </pre>

                </div>

                <div class="box-endpoint">
                    <h3>Buscar Autores</h3>
                    <ul class="lista-caracteristica-rota">
                        <li>
                            <label>Método:</label> <p>GET</p>
                        </li>

                        <li>
                            <label>Endpoint:</label> <p>api/autores/busca</p>
                        </li>

                        <li>
                            <label>Parâmetros:</label> <p>nome</p>
                        </li>

                        <li>
                            <label>Requisição:</label> <p>http://127.0.0.1:8000/api/autores/busca?nome=teste</p>
                        </li>

                        <li>
                            <label>Resposta JSON:</label>
                        </li>
                    </ul>

                    <pre>
                        <code>
{
"autores": [
	{
	"id": 2,
	"nome": "autor teste",
	},
	{
	"id": 3,
	"nome": "autor teste 3",
	}
]
}
                        </code>
                    </pre>

                </div>

                <div class="box-endpoint">
                    <h2 id="editora" class="titulo-end-point">CRUD editoras:</h2>
                    <h3>Listar Editoras</h3>
                    <ul class="lista-caracteristica-rota">
                        <li>
                            <label>Método:</label> <p>GET</p>
                        </li>

                        <li>
                            <label>Endpoint:</label> <p>api/editora</p>
                        </li>

                        <li>
                            <label>Resposta JSON:</label>
                        </li>
                    </ul>

                    <pre>
                        <code>
[
    {
        "id": 1,
        "nome": "Editora Exemplo"
    }
]
                        </code>
                    </pre>

                </div>

                <div class="box-endpoint">
                    <h3>Criar Editora</h3>
                    <ul class="lista-caracteristica-rota">
                        <li>
                            <label>Método:</label> <p>POST</p>
                        </li>

                        <li>
                            <label>Endpoint:</label> <p>api/editora</p>
                        </li>

                        <li>
                            <label>JSON:</label>
                        </li>
                    </ul>

                    <pre>
                        <code>
{
    "nome": "Nova Editora"
}
                        </code>
                    </pre>

                </div>

                <div class="box-endpoint">
                    <h3>Exibir Editora</h3>
                    <ul class="lista-caracteristica-rota">
                        <li>
                            <label>Método:</label> <p>GET</p>
                        </li>

                        <li>
                            <label>Endpoint:</label> <p>api/editora/{id}</p>
                        </li>

                        <li>
                            <label>Resposta JSON:</label>
                        </li>
                    </ul>

                    <pre>
                        <code>
{
    "id": 1,
    "nome": "Editora Exemplo"
}
                        </code>
                    </pre>

                </div>

                <div class="box-endpoint">
                    <h3>Atualizar Editora</h3>
                    <ul class="lista-caracteristica-rota">
                        <li>
                            <label>Método:</label> <p>PUT</p>
                        </li>

                        <li>
                            <label>Endpoint:</label> <p>api/editora/{id}</p>
                        </li>

                        <li>
                            <label>JSON:</label>
                        </li>
                    </ul>

                    <pre>
                        <code>
{
    "nome": "Editora Atualizada"
}
                        </code>
                    </pre>

                </div>

                <div class="box-endpoint">
                    <h3>Deletar Editora</h3>
                    <ul class="lista-caracteristica-rota">
                        <li>
                            <label>Método:</label> <p>DELETE</p>
                        </li>

                        <li>
                            <label>Endpoint:</label> <p>api/editora/{id}</p>
                        </li>

                        <li>
                            <label>Resposta JSON:</label>
                        </li>
                    </ul>

                    <pre>
                        <code>
                        No body returned for response
                        </code>
                    </pre>

                </div>

                <div class="box-endpoint">
                    <h3>Livros da Editora</h3>
                    <ul class="lista-caracteristica-rota">
                        <li>
                            <label>Método:</label> <p>GET</p>
                        </li>

                        <li>
                            <label>Endpoint:</label> <p>api/editora/editoraLivros/{id}</p>
                        </li>

                        <li>
                            <label>Resposta JSON:</label>
                        </li>
                    </ul>

                    <pre>
                        <code>
{
"editora": {
    "id": 2,
    "nome": "editora teste",
},
"livros": [
    {
    "id": 1,
    "titulo": "titulo livro teste",
    "resumo": "resumo livro teste",
    "ano_lancamento": "2024",
    "autores_id": 2,
    "editoras_id": 2,
    }
]
}
                        </code>
                    </pre>

                </div>

                <div class="box-endpoint">
                    <h3>Buscar Editoras</h3>
                    <ul class="lista-caracteristica-rota">
                        <li>
                            <label>Método:</label> <p>GET</p>
                        </li>

                        <li>
                            <label>Endpoint:</label> <p>api/editoras/busca</p>
                        </li>

                        <li>
                            <label>Parâmetros:</label> <p>nome</p>
                        </li>

                        <li>
                            <label>Requisição:</label> <p>http://127.0.0.1:8000/api/editoras/busca?nome=teste</p>
                        </li>

                        <li>
                            <label>Resposta JSON:</label>
                        </li>
                    </ul>

                    <pre>
                        <code>
{
"editoras": [
	{
	"id": 2,
	"nome": "editora teste",
	}
]
}
                        </code>
                    </pre>

                </div>
            </div>
        </main>
    </body>
</html>
