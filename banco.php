<?php
    if(!isset($_SESSION)){
        session_start();
    
    }

    $nome = $_SESSION["nome"];
    $endereco = $_SESSION["endereco"];
    $estado= $_SESSION["estado"];
    $cidade= $_SESSION["cidade"];
    $telefone= $_SESSION["telefone"];
    $email= $_SESSION["email"];
    $cpf= $_SESSION["cpf"];
    $senha= $_SESSION["senha"];
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="meu_estilo.css">
</head>
<body>
    <div class="container">
        <p>Nome: <?php echo ($nome)?> </p>
        <p>Endereço: <?php echo ($endereco)?> </p>
        <p>Estado: <?php echo ($estado) ?></p>
        <p>Cidade: <?php echo ($cidade) ?></p>
        <p>Telefone: <?php echo ($telefone) ?></p>
        <p>Email: <?php echo ($email) ?></p>
        <p>CPF: <?php echo ($cpf) ?></p>
        <p>Senha: <?php echo ($senha) ?></p>
        <a class="btn btn-success" href="index.php">Voltar</a>
    </div>
</body>
</html>

