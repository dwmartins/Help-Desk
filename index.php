<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <link rel="stylesheet" href="./src/css/style.css">
</head>
<body>


   <nav>
      <a href="index.php">
         <img src="./src/img/logo.png" alt="Logo">
         <h2>Help Desk</h2>
      </a>
   </nav>

   <section class="tela_login">
      <div class="formulario_login">
         <div class="titulo_login">
            <p>Login</p>
         </div>
            <form action="./src/controller/valida_login.php" method="POST">
               
               <input name="email" type="email" placeholder="E-mail">

               <input name="senha" type="password" placeholder="Senha">

               <button type="submit">Entrar</button>

               <?php if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?>

                  <p class="erro_login">E-mail ou senha invalidos(s)</p>

               <?php } ?>

               <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>

                  <p class="erro_login">Por favor realize o login!</p>

               <?php } ?>

            </form>
         </div>
   </section>

</body>
</html>