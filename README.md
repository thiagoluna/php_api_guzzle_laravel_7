# php_api_guzzle_laravel_7
Criando API e consumindo com Guzzle

API criada com 2 endpoints: 
- Listar todos os dados da tabela 
- Listar apenas 1 registro.

Com o [Guzzle](http://docs.guzzlephp.org/en/stable/) consumo os dados dessa API e envio para as views de listagem geral e edição de um registro. - 
Com o ***Javascript*** consumo os dados de CEP da API [viacep](https://viacep.com.br/) 

Para rodar a aplicação em seu pc:
- Fazer o clone deste repositório
- Rodar `composer install`
- Parametrizar o .env com os dados de acesso ao banco de dados
- Rodar o `php artisan migrate`
- Rodar a aplicação pelo `php artisan serve` e rodar a API pelo localhost.
Esta é uma forma de fazer o Guzzle consumir a API que está rodando em seu pc.

