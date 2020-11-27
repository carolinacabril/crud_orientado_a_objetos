# crud_orientado_a_objetos como utilizar

1) Abra o terminal e acesse a pasta htdocs do XAMPP
   - cd C:\xampp\htdocs

2) Clonar o repositório para a pasta htdocs
   - git clone https://github.com/carolinacabril/crud_orientado_a_objetos.git

3) Abrir a pasta CRUD_ORIENTADO_A_OBJETOS no editor de códigos de sua preferência

4) Iniciar os módulos APACHE e MYSQL do XAMPP

5) Abrir o phpmyadmin e criar um novo banco de dados com o nome db_agenda

6) Importar o arquivo contatos.sql que está na pasta CRUD_ORIENTADO_A_OBJETOS para o banco de dados criado

7) Acessar o arquivo contato.class.php e verificar se a informações de banco de dados no módulo PDO estão corretas
  new PDO("mysql:dbname=nome_do_banco_de_dados;host=localhost","seu_usuario","sua_senha");

8) Abrir a url para acessar o sistema http://localhost/CRUD_ORIENTADO_A_OBJETOS/index.php
