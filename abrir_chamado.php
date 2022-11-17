<?php 
require_once "./src/controller/validador_acesso.php";
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
            <p>Abertura de chamado</p>
        </div>

        <div class="menu">
            <form action="" class="form_abertura">
                <label for="">Titulo</label>
                <input type="text" name="titulo" id="">

                <label for="">Categoria</label>
                    <select name="" id="">
                        <option value=""></option>
                        <option value="">categoria 1</option>
                        <option value="">categoria 1</option>
                        <option value="">categoria 1</option>
                        <option value="">categoria 1</option>
                    </select>

                <label for="">Descrição</label>
                <textarea name="" id="" cols="30" rows="5"></textarea>

                <div class="botoes_abertura">
                    <a href="./home.php">Voltar</a>
                    <button type="submit">Abrir</button>
                </div>
            </form>
        </div>
    </div>
   </section>

</body>
</html>