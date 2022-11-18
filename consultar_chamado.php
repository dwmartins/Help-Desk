<?php 
require_once "./src/controller/validador_acesso.php";
require "./src/controller/conexao.php";
include './src/controller/Chamados.php';

$chamado = new Chamados($mysql);
$chamados = $chamado->exibirtodos() ;
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
            <?php foreach($chamados as $chamado) { ?>

                <div>
                    <h2><?= $chamado['titulo']; ?></h2>
                    <h4><?= $chamado['categoria']; ?></h4>
                    <p><?=  nl2br($chamado['descricao']); ?></p>

                    <div class="btns_consulta">
                        <a class="editar" href="./editar_chamado.php?id=<?= $chamado['id']; ?>">Editar</a>
                        <a class="finalizar" href="./deletar_chamado.php?id=<?= $chamado['id']; ?>">Finalizar</a>
                    </div>
                </div>

            <?php } ?>
        </div>

        <div class="btn_voltar">
            <a href="home.php">Voltar</a>
        </div>
    </div>

   </section>
</body>
</html>