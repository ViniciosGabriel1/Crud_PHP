<?php
// Define as informações de configuração do banco de dados.
$db_name = "test";        // Nome do banco de dados.
$db_host = "localhost:3306";  // Host do banco de dados com a porta (3306 é a porta padrão do MySQL).
$db_user = "root";         // Nome de usuário do banco de dados.
$db_password = "show1908";  // Senha do banco de dados.

// Cria uma instância de conexão PDO com o banco de dados MySQL usando as informações de configuração.
$pdo = new PDO("mysql:dbname=$db_name;host=$db_host", "$db_user", "$db_password");

// Executa uma consulta SQL para selecionar todos os valores da tabela 'usuario'.
$sql = $pdo->query('SELECT * FROM usuario');

// Coleta todos os dados resultantes da consulta e os armazena na variável $dados.
$dados = $sql->fetchAll();