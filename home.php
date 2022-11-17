<?php 
require_once "./src/controller/validador_acesso.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

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
            <p>Menu</p>
         </div>

         <div class="menu">
            <div class="itens">
               <a href="./abrir_chamado.php">
                  <img src="./src/img/formulario_abrir_chamado.png" alt="Inserir">
               </a>
            </div>

            <div class="itens">
               <a href="./consultar_chamado.php">
                  <img src="./src/img/formulario_consultar_chamado.png" alt="Consultar">
               </a>
            </div>
         </div>
      </div>

   </section>
</body>
</html>