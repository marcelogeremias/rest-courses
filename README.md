# Courses REST API

> Projeto básico de uma API Rest de cursos utilizando Lumen 8.

## Requisitos mínimos
- PHP >= 7.3
- Composer >= 2

## Instalação

1. Após efetuar o clone do repositório, criar uma cópia do arquivo `.env.example` e renomear para o arquivo `.env` e incluir as informações do banco de dados que será utilizado.
2. Rodar o comando `composer install` para instalar as dependências do projeto.
3. Rodar os comandos `php artisan migrate:install` e `php artisan migrate` para criar as tabelas no banco de dados.
4. Rodar o comando `php artisan db:seed` para criar uma massa de dados aleatória.

## Como usar?

Rodar o comando `php -S 127.0.0.1:8000 -t public/` para subir o servidor.

## Métodos
Requisições para a API devem seguir os padrões:
| Método | Descrição |
|---|---|
| `GET` | Retorna informações de registros. |
| `POST` | Criar um novo registro. |
| `PUT` | Atualiza dados de um registro. |
| `DELETE` | Remove um registro. |

### Lista dos cursos [GET]
Traz a lista dos cursos cadastrados no sistema.

+ Request (application/json)

    ```
    http://127.0.0.1:8080/courses
    ```

    + Body

+ Response 200

    + Body

            {
                "current_page": 1,
                "data": [
                    {
                        "id": 1,
                        "name": "Eum ducimus voluptatem delectus sit.",
                        "description": "Eum rerum dicta et aperiam accusantium possimus enim dolorem.",
                        "body": "Et molestiae doloremque qui. Sit harum voluptas numquam expedita quia blanditiis quo et. Voluptatem vitae aliquam unde fugiat optio quibusdam. Impedit animi qui sit quaerat dolorum repudiandae.",
                        "price": "6.49",
                        "created_at": "2021-01-09T03:39:23.000000Z",
                        "updated_at": "2021-01-09T03:39:23.000000Z"
                    },
                    {
                        "id": 2,
                        "name": "Nesciunt voluptas corporis placeat necessitatibus adipisci dolorem.",
                        "description": "Laboriosam et eius voluptatum ut eum autem.",
                        "body": "Nemo distinctio sed nulla qui eum est. Consequatur iste ea quaerat nostrum est et. Perspiciatis sint voluptatum delectus asperiores.",
                        "price": "0.43",
                        "created_at": "2021-01-09T03:39:24.000000Z",
                        "updated_at": "2021-01-09T03:39:24.000000Z"
                    }
                ],
                "first_page_url": "http://127.0.0.1:8000/courses?page=1",
                "from": 1,
                "last_page": 6,
                "last_page_url": "http://127.0.0.1:8000/courses?page=6",
                "links": [
                    {
                        "url": null,
                        "label": "pagination.previous",
                        "active": false
                    },
                    {
                        "url": "http://127.0.0.1:8000/courses?page=1",
                        "label": 1,
                        "active": true
                    },
                    {
                        "url": "http://127.0.0.1:8000/courses?page=2",
                        "label": 2,
                        "active": false
                    },
                    {
                        "url": "http://127.0.0.1:8000/courses?page=3",
                        "label": 3,
                        "active": false
                    },
                    {
                        "url": "http://127.0.0.1:8000/courses?page=4",
                        "label": 4,
                        "active": false
                    },
                    {
                        "url": "http://127.0.0.1:8000/courses?page=5",
                        "label": 5,
                        "active": false
                    },
                    {
                        "url": "http://127.0.0.1:8000/courses?page=6",
                        "label": 6,
                        "active": false
                    },
                    {
                        "url": "http://127.0.0.1:8000/courses?page=2",
                        "label": "pagination.next",
                        "active": false
                    }
                ],
                "next_page_url": "http://127.0.0.1:8000/courses?page=2",
                "path": "http://127.0.0.1:8000/courses",
                "per_page": 2,
                "prev_page_url": null,
                "to": 2,
                "total": 11
            }

### Vizualizar um curso [GET]
Traz as informações de um curso específico.

+ Request (application/json)

    ```
    http://127.0.0.1:8080/courses/{ID_DO_CURSO}
    ```

    + Body

+ Response 200

    + Body

            {
                "id": 1,
                "name": "Eum ducimus voluptatem delectus sit.",
                "description": "Eum rerum dicta et aperiam accusantium possimus enim dolorem.",
                "body": "Et molestiae doloremque qui. Sit harum voluptas numquam expedita quia blanditiis quo et. Voluptatem vitae aliquam unde fugiat optio quibusdam. Impedit animi qui sit quaerat dolorum repudiandae.",
                "price": "6.49",
                "created_at": "2021-01-09T03:39:23.000000Z",
                "updated_at": "2021-01-09T03:39:23.000000Z"
            }

### Cadastrar um curso [POST]
Cadastrar as informações de um curso no sistema.

| Parâmetro | Descrição |
|---|---|
| `name` | Informar o nome do curso |
| `description` | Informar uma breve descrição do curso |
| `body` | Informar a descrição mais detalhada do curso |
| `price` | Informar o preço do curso |

+ Request (application/json)

    ```
    http://127.0.0.1:8080/courses/
    ```

    + Body

            {
                "name": "Nome fake do curso",
                "description": "Breve descrição fake do curso",
                "body": "Descrição mais detalhada do curso",
                "price": "2.75"
            }

+ Response 200

    + Body

            {
                "data": {
                    "message": "Curso criado com sucesso!"
                }
            }

### Atualizar um curso [PUT]
Atualizar as informações de um curso no sistema.

| Parâmetro | Descrição |
|---|---|
| `name` | Informar o nome do curso |
| `description` | Informar uma breve descrição do curso |
| `body` | Informar a descrição mais detalhada do curso |
| `price` | Informar o preço do curso |

+ Request (application/json)

    ```
    http://127.0.0.1:8080/courses/{ID_DO_CURSO}
    ```

    + Body

            {
                "name": "Nome fake do curso",
                "description": "Breve descrição fake do curso",
                "body": "Descrição mais detalhada do curso",
                "price": "2.75"
            }

+ Response 200

    + Body

            {
                "data": {
                    "message": "Curso atualizado com sucesso!"
                }
            }

### Deletar um curso [DELETE]
Deletar as informações de um curso no sistema.

+ Request (application/json)

    ```
    http://127.0.0.1:8080/courses/{ID_DO_CURSO}
    ```

    + Body

+ Response 200

    + Body

            {
                "data": {
                    "message": "Curso deletado com sucesso!"
                }
            }

## Agradecimentos

> Este projeto foi desenvolvido seguindo o vídeo [Sua Primeira API REST com Lumen](https://www.youtube.com/watch?v=1YT3DnbirKg) publicado pelo canal `Code Experts`, fazendo as adaptações necessárias para o Lumen 8. Deixo aqui o meu agradecimento ao canal por compartilhar o conhecimento.