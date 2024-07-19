# API CEP

É uma API que faz busca cep, utilizando a tecnologia laravel e seus recursos

## Documentação da API

#### Primeira Opção Retorna um ou mais CEP

```http
  GET http://127.0.0.1:8000/api/search/local/?cep=01001000+17560-246
```
#### Segunda Opção Retorna um ou mais CEP

```http
  GET http://127.0.0.1:8000/api/search/local/?cep[]=01001000&cep[]=17560-246
```

#### Se quiser optar tambem por instala a extensão REST CLIENT no Visual Studio Code no projeto tem um arquivo chamado Response.http so fazer a requisão

