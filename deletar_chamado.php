<?php
require_once "./src/controller/validador_acesso.php";
require "./src/controller/conexao.php";
include './src/controller/Chamados.php';
require './src/controller/redireciona.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $chamado = new Chamados($mysql);
    $chamado->deletarDados($_POST['id']);

    redireciona('./consultar_chamado.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar chamado</title>

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

    <section class="inicio">
        <div class="deletar_chamado">
            <div class="titulo_menu">
                <p>Deseja finalizar o chamado?</p>
            </div>

            <form action="./deletar_chamado.php" method="POST">
                <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
                <a href="./consultar_chamado.php">Voltar</a>
                <button type="submit">Finalizar</button>
            </form>
        </div>
   </section>
</body>
</html>