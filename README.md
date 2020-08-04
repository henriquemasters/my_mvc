# My MVC

Um mini-Framework MVC fácil, rápido e extremamente simples de implementar. Crie e gerencie suas aplicações em minutos!

## Instalação

Faça o clone do projeto no diretório raíz do seu servidor:

```bash
git clone https://github.com/henriquemasters/my_mvc.git
```
Navegue pelo terminal até a pasta do seu projeto e execute o comando abaixo:

```bash
composer update
```

Pronto!

## Configurações

Abra o arquivo source/Config.php e altere as configurações de acordo com sua aplicação:

```php
<?php

...

if (!R::testConnection()) {
    R::setup('mysql:host=SERVIDOR; dbname=SEU_BANCO', 'USUARIO', 'SENHA');
}

define("ROOT", "http://localhost/my_mvc"); // Altere o nome do diretório e também esta URL, caso necessário.
define("APP_NAME", "Meu Site"); // Nome da sua Aplicação/Site
define("MAIL", [
    'host' => 'SERVIDOR_SMTP',
    'port' => 'PORTA',
    'secure' => 'ssl', // ssl ou tls
    'user' => 'EMAIL_PARA_ENVIO',
    'pwd' => 'SENHA',
    'from_name' => 'Nome da sua Aplicação/Site',
    'from_email' => 'EMAIL_PARA_ENVIO'
]);

...
```

## Contribuições
_PULL REQUEST's_ são bem-vindos. Para grandes mudanças, abra uma _issue_ primeiro para discutir o que você gostaria de mudar.

Certifique-se de sempre atualizar seu clone em relação à este repositório, antes da realização dos seus testes.

## License
[MIT](https://choosealicense.com/licenses/mit/)