<?php
// Inclui o arquivo de configuração 'config.php', que deve conter a configuração do banco de dados.
require 'config.php';

// Obtém os valores enviados por um formulário HTML com os nomes 'nome' e 'email' via método POST.
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
//criptografa a senha
$senhaSegura = password_hash($senha, PASSWORD_BCRYPT, ['salt' => $salt]);

// Verifica se ambos $nome e $email foram preenchidos no formulário.
if ($nome && $email && $senha) {

    // Prepara uma consulta SQL para verificar se já existe um registro com o mesmo email na tabela 'usuario'.
    $sql = $pdo->prepare("SELECT * FROM usuario WHERE email = :email OR senha = :senha");

    $sql->bindValue(':email', $email);
    $sql->bindValue(':senha', $senha);
    $sql->execute();


    // Verifica se não foi encontrado nenhum registro com o mesmo email.
    if ($sql->rowCount() === 0) {

        // Prepara uma consulta SQL para inserir um novo registro na tabela 'usuario'.
        $sql = $pdo->prepare("INSERT INTO usuario (nome, email, senha) VALUES (:nome, :email, :senha )");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $senhaSegura);

        // Executa a inserção do novo registro.
        $sql->execute();

        // Redireciona o usuário para a página 'cadastro.php' após a inserção bem-sucedida.
        header("Location: cadastro.php");

        // Encerra o script.
        exit;
    } elseif ($sql->rowCount() == 1) {
        // Se houver um registro com o mesmo email, redireciona o usuário para a página de erro 'erro.php'.
        header("Location: erro.php");
    }
} else {

    // Se algum dos campos no formulário não
    header("Location: cadastro.php");
}