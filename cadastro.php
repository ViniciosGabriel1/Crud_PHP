<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digite nome e email</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        Apresente-se
    </header>
    <script>
        // Função para mostrar um alerta
        function mostrarAlerta() {
            alert("INFORMAÇÕES ENVIADAS");
        }
    </script>
    <section>
        <form action="cadstrar_action.php" method="post">
            <label for="nome ">Nome</label>
            <input type="text" name="nome" id="idnome">
            <label for="sobrenome">Email</label>
            <input type="text" name="email" id="email">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
            <button type="submit" onclick="mostrarAlerta()">Cadastrar</button>
        </form>
    </section>


</body>

</html>