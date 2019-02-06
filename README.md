# Telium Troubleshooting Test

## Instruções Gerais

Para começar basta realizar o clone do projeto em seu ambiente de dev.
Esse projeto utiliza como base o laravel 5.6, para os requisitos acesse a [documentação](https://laravel.com/docs/5.6/installation)
 do laravel.

Em seguida executar a atualização de pacotes do composer:
```
composer update
```
Agora configure sua database usando um arquivo .env preferencialmente. Existe um modelo na raiz do projeto mas os parâmetros necessários são:

```php

DB_CONNECTION=mysql
DB_HOST=<seu host>
DB_PORT=3306
DB_DATABASE=<sua database>
DB_USERNAME=<seu usuário>
DB_PASSWORD=<sua senha>

```

Em seguida rodar o comando para executar as migrations e seeds, com isso você terá as tabelas e dados necessários.

```
php artisan migrate:refresh --seed
```

Se tudo correu bem, basta acessar a url base do projeto para encontrar a página padrão de welcome do laravel

![Welcome do Laravel][welcome]

[welcome]: https://github.com/telium-networks/troubleshooting/raw/master/public/images/laravel_welcome.png "Welcome Laravel"

## Desafio

O código desse projeto tem 10 erros embutidos, dos mais diversos tipos como erros em controllers, views, rotas, etc.

Você deverá acessar somente uma url principal, não é permitido alterá-la.
```
http://<sua url>/contract/1
```    
A partir dessa página você deve realizar troubleshooting afim de chegar ao resultado final, uma página estática com extamanete esses valores.

![Resultado][result]

[result]: https://github.com/telium-networks/troubleshooting/raw/master/public/images/result.png "Resultado"

## Premissas

- Você pode utilizar qualquer ferramenta para debug, instalada no server, debugbar, etc.
- Todos os problemas podem ser resolvidos com 1 linha de código, muitas vezes uma palavra, então não refaça código para contornar o erro.
- 

## Instruções de envio

Faça um fork do projeto para seu github e finalizado o desenvolvimento, faça um pull request para o projeto principal.
Além do seu código, envie instruções dos erros que corrigiu.

## Contato

Em caso de qulquer dúvida, critica ou sugestão que voce tiver, favor enviar um email para ti@telium.com.br que lhe auxiliaremos dentro do possível.

## Prazo

Você tem SETE dias, contando do envio deste desafio para você, para nos entregar sua solução pronta. 

Boa sorte!
