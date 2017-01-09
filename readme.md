#Requisitos para instalação

Para ambiente linux, use o LAMP (linux, apache, my_sql, php).
Para ambiente linux, use o XAMP (windows, apache, my_sql, php).

Instale o phpmyadmin

Faça download do projeto

Entre na pasta downloads

Descompacte a pasta do projeto 

Na pasta do projeto, abra o terminal e digite os comandos abaixos:

cp .env.example .env

Edite o arquivo .env, alterando as seguintes linhas:
 
DB_DATABASE=DesafioBD
DB_USERNAME=root
DB_PASSWORD=sua_senha (do mysql)

Novamente no terminal, digite:

composer install

composer update

php artisan key:generate

php artisan migrate

php artisan serve

No navegador web: http://localhost:8000/desafio

Observação: O projeto acompanha um arquivo (DesafioBD.sql) para importação no phpmyadmin. Neste caso não é necessário usar o comando migrate.
