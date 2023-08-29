<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        Apresente-se
    </header>

    <section>
        <form action="cadstrar_action.php" method="post">
            <label for="nome ">Nome</label>
            <input type="text" name="nome" id="idnome" placeholder="Nome e Sobrenome" required>
            <label for="sobrenome">Email</label>
            <input type="email" name="email" id="email" placeholder="XXX@Xmail.com" required>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="XXXXXXXXXXX" required>
            <button type="submit">Cadastrar</button>
        </form>
    </section>


</body>

</html>