<?php
    if (isset($_POST['cadastrar']))
    {
        var_dump($_POST) ;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Aluno</title>
</head>
<body>
    <h1>Cadastrar Aluno</h1>
    <form method="post">
        <label for="nome"> Nome: </label>
        <input type="text" id="nome" name="nome"><br>
        <label for="cpf">CPF: </label>
        <input type="text" id="cpf" name="cpf"><br>
        <label for="dataNascimento">Data de Nascimento: </label>
        <input type="text" id="cpf" name="cpf"><br>
        <input type="submit" name="cadastrar">
    </form>
</body>
</html>