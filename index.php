<?php
// Inclui o arquivo de configuração 'config.php', que deve conter as configurações de conexão com o banco de dados.
require 'config.php';

// Cria um array vazio chamado $lista para armazenar os dados da tabela 'usuario'.
$lista = [];

// Executa uma consulta SQL para selecionar todos os valores da tabela 'usuario'.
$sql = $pdo->query('SELECT * FROM usuario');

// Verifica se a consulta retornou pelo menos uma linha.
if ($sql->rowCount() > 0) {
    // Se sim, coleta todos os dados resultantes da consulta e os armazena no array $lista.
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!-- Inicia a seção HTML -->
<h1>Listagem de Usuários</h1>

<!-- Cria uma tabela HTML para exibir os dados da lista -->
<table border="1">
    <tr>
        <th>id</th>
        <th>Nome</th>
        <th>Email</th>
    </tr>
    <?php foreach ($lista as $usuario) : ?>
    <!-- Itera sobre o array $lista e exibe os dados de cada usuário na tabela -->
    <tr>
        <td><?= $usuario['idusuario']; ?></td>
        <td><?= $usuario['nome']; ?></td>
        <td><?= $usuario['email']; ?></td>
        <td><?= $usuario['senha']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>