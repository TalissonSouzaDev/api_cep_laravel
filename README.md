# API CEP

É uma API que faz busca de cep, utilizando a tecnologia laravel e seus recursos


## Requisitos:

Para rodar esse projeto, você vai precisar:

`PHP8.1`
`COMPOSER`
###### Clone do projeto

```
  git clone https://github.com/TalissonSouzaDev/api_cep_laravel.git .
```
###### acessando o caminho
```
  cd caminho do projeto
```
###### instalando o composer
```
  composer install
```
###### copiando o .env
```
  cp .env.example .env
```
###### Gerar a key do projeto Laravel
```sh
php artisan key:generate
```
###### rodando o projeto
```
  php artisan serve
```

## OU

`DOCKER`

Suba os containers do projeto
```sh
docker-compose up -d
```


Acessar o container
```sh
docker-compose exec apicep bash
```


Instalar as dependências do projeto
```sh
composer install
```

copiando o .env
```
  cp .env.example .env
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```

## Rodando o Test de Feature

```sh
php artisan test
```

## Documentação da API

#### Primeira Opção Retorna um ou mais CEP

```http
  GET /api/search/local/?cep=01001000+17560-246
```
#### Segunda Opção Retorna um ou mais CEP

```http
  GET /api/search/local/?cep[]=01001000&cep[]=17560-246
```

#### Se quiser optar tambem por instalar a extensão REST CLIENT no Visual Studio Code no projeto tem um arquivo chamado Response.http so fazer a requisição