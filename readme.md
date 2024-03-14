# Base de conhecimento para Fármaco

## Objetivo

Esse repositório faz parte do meu estudo para melhorar minhas habilidades de desenvolvimento. Estou usando o PHP para implementar uma API usando Clean Architecture.

## Ambiente Desenvolviemnto

Criei um docker composer e estou usando o devcontainer do VSCode para rodar esse ambiente

## Recursos

Principais dados para cadatro

### Produto

- Id: UUID V4 
- Nome: Texto simples
- Status: Lista predefinida (Rascunho, Publicado, Inativo)
- Imagem: path da imagem
- Laboratório : Lista predefinida (gestão dinâmica)
- Patologia: Lista predefinida (gestão dinâmica)
- Apresentações: Texto longo (formatável)
- Composição: Texto longo (formatável)
- Posologia: Texto longo (formatável)
- observations: Texto longo (formatável)

### Laboratório

- Id: UUID V4
- Nome: Texto simples

### Patologia

- Id: UUID V4
- Nome: Texto simples

## Installation

~~~shell
composer install
~~~

## Run 

~~~shell
php index.php
~~~

