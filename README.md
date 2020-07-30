# BuscaCEP
## Linguagens:
- HTML5
- PHP5
- CSS3
- JavaScript
- MySQL
- Apache

## Frameworks:
- Standand Eloquent Project v5.1.4
- Bootstrap v4.0.0
- jQuery

## Ferramentas
- XAMPP
- Composer

## Instruções
Para acesso local, algumas ferramentas são necessárias:
- Se não possuir alguma ferramenta de acesso ao servidor Apache local, instale o XAMPP através do link:
	> https://www.apachefriends.org/pt_br/download.html
- WINDOWS
	Instale o Composer através do link:
	> https://getcomposer.org/Composer-Setup.exe
- LINUX/MACOS
	Siga as instruções em:
	> https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos

- Abra o terminal de comando na pasta do projeto e execute:
	composer install
	composer dump-autoload

- Configure o arquivo .env com os dados de sua base de dados:
	$DBDRIVER="{DBDRIVER}";
	$DBHOST="{DBHOST}";
	$DBNAME="{DBNAME}";
	$DBUSER="{DBUSER}";
	$DBPASS="{DBPASS}";
	$DBPORT="{DBPORT}";

	- Exemplo:
		$DBDRIVER="mysql";
		$DBHOST="localhost";
		$DBNAME="buscacep";
		$DBUSER="root";
		$DBPASS="pass";
		$DBPORT="3306";

- Para testar o código, abra o terminal na pasta principal do arquivo e rode os seguintes comandos:
	vendor\bin\phinx migrate
	vendor\bin\phinx seed:run

## Funcionalidades:

- Rotas: Para registrar uma nova rota:
	- Abra o arquivo route-list.php em "routes/route-list.php":
	- Registre uma nova rota como mostrado no arquivo;
	- Para acessar essa nova rota no navegador localmente, configure a url para:
		localhost/standard-eloquent-project/categorias
	- Para acessar essa nova rota no navegador remotamente, configure a url para:
		www.domain.com/categorias

- Migrações: Para criar uma nova migração, abra o terminal na pasta principal do projeto e rode o comando:
	vendor\bin\phinx create MyFirstMigration
- Para migrar as tabelas para o banco de dados, rode o comando:
	vendor\bin\phinx migrate
- Para dar um rollback, rode o comando:
	vendor\bin\phinx rollback

- Seeders: Para criar um novo Seeder, abra o terminal na pasta principal do projeto e rode o comando:
	vendor\bin\phinx seed:create MyFirstSeeder
- Para rodar um Seeder, use o comando:
	vendor\bin\phinx seed:run
- Para rodas um Seeder específico, use o comando:
	vendor\bin\phinx seed:run -s MyFirstSeeder -s MySecondSeeder

## Instructions
- Local access requires some tools:
	- If you don't have any Apache tool, install XAMPP at the following link:
		https://www.apachefriends.org/pt_br/download.html
- WINDOWS => Install Composer:
	https://getcomposer.org/Composer-Setup.exe
- LINUX/MACOS => Follow the instructions at:
	https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos

- Open terminal at root directory and run:
	composer install
	composer dump-autoload

- Configure the file config.php to your database info:
	$DBDRIVER="{DBDRIVER}";
	$DBHOST="{DBHOST}";
	$DBNAME="{DBNAME}";
	$DBUSER="{DBUSER}";
	$DBPASS="{DBPASS}";
	$DBPORT="{DBPORT}";
	- Example:
		$DBDRIVER="mysql";
		$DBHOST="localhost";
		$DBNAME="mydb";
		$DBUSER="root";
		$DBPASS="pass";
		$DBPORT="3306";

- To test the project, open the terminal at root directory and run the following codes:
	vendor\bin\phinx migrate
	vendor\bin\phinx seed:run

## Engine

- Routes:To register a new route:
	- Open the file route-list.php at "routes/route-list.php":
	- Add a new route following the example in the file;
	- To reach this page at navigator locally, set url to:
		localhost/standard-eloquent-project/categories
	- To reach this page at navigator remotely, set url to:
		www.domain.com/categories

- Migrations: To create a new migration, open the terminal at root directory and run:
	vendor\bin\phinx create MyFirstMigration
- Execute migrate by running the command:
	vendor\bin\phinx migrate
- Execute rollback by running the command:
	vendor\bin\phinx rollback

- Seeders: To create a new seeder, open the terminal at root directory and run:
	vendor\bin\phinx seed:create MyFirstSeeder
- Execute migrate by running the command:
	vendor\bin\phinx seed:run
- Execute a specific migrate by running the command:
	vendor\bin\phinx seed:run -s MyFirstSeeder -s MySecondSeeder
