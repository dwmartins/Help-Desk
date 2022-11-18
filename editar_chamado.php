<?php 
require_once "./src/controller/validador_acesso.php";
require "./src/controller/conexao.php";
include './src/controller/Chamados.php';
require './src/controller/redireciona.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $chamado = new Chamados($mysql);
    $chamado->atualizaDados($_POST['id'], $_POST['titulo'], $_POST['categoria'], $_POST['descricao']);

    redireciona('./consultar_chamado.php');
}

$chamado = new Chamados($mysql);
$chamadoId = $chamado->encontrarId($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abrir chamado</title>

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
   <div>
        <div class="titulo_menu">
            <p>Editar chamado</p>
        </div>

        <div class="menu">
            <form action="./editar_chamado.php" method="POST" class="form_abertura">
                <label for="">Titulo</label>
                <input type="text" name="titulo" value="<?= $chamadoId['titulo']; ?>">

                <label for="">Categoria</label>
                    <select name="categoria" id="" value="">
                        <option value=""><?= $chamadoId['categoria']; ?></option>
                        <option value="internet">Internet</option>
                        <option value="login">Login</option>
                        <option value="hardware">Hardware</option>
                        <option value="outros">Outros</option>
                    </select>

                <label for="">Descrição</label>
                <textarea name="descricao" id="" cols="30" rows="5"><?= $chamadoId['descricao']; ?></textarea>

                <input type="hidden" name="id" value="<?= $chamadoId['id']; ?>">

                <div class="botoes_abertura">
                    <a href="./home.php">Voltar</a>
                    <button type="submit">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
   </section>

</body>
</html>