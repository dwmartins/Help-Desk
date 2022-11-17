<?php 
require_once "./src/controller/validador_acesso.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar chamado</title>

    <link rel="stylesheet" href="./src/css/style.css">
</head>
<body>
    <nav>
        <a href="home.php">
            <img src="./src/img/logo.png" alt="Logo">
            <h2>Help Desk</h2>
        </a>

        <a href="./src/controller/logoff.php" class="btn_sair">SAIR</a>
   </nav>

   <section class="chamados_abertos">

    <div>
        <div class="titulo_menu">
            <p>Consultar chamado</p>
        </div>

        <div class="descricao_chamado">
            <div>
                <h2>Titulo do chamado...</h2>
                <h4>Categoria</h4>
                <p>Descrição do chamado</p>
            </div>

            <div>
                <h2>Titulo do chamado...</h2>
                <h4>Categoria</h4>
                <p>Descrição do chamado</p>
            </div>

            <div>
                <h2>Titulo do chamado...</h2>
                <h4>Categoria</h4>
                <p>Descrição do chamado</p>
            </div>
        </div>

        <div class="btn_voltar">
            <a href="home.php">Voltar</a>
        </div>
    </div>

   </section>
</body>
</html>