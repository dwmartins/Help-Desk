<?php
// Aqui vai iniciar a seção
session_start();

// Variavel que verifica se a autenticação foi realizada
$ususario_autenticado = false;

// Usuarios do sistema
$usuarios_app = array(
    array('email' => 'adm@teste.com', 'senha' => '2707'),
    array('email' => 'user@teste.com', 'senha' => '2707'),
);


// Autenticando usuário
foreach($usuarios_app as $user) {
    // echo 'Usuário app: ' . $user['email'] . ' / ' . $user['senha'];
    // echo '<br/>';
    // echo 'Usuário form: ' . $_POST['email'] . ' / '. $_POST['senha']; 

    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $ususario_autenticado = true;
    }
}

if($ususario_autenticado) {
    header('Location: ../../home.php');
    $_SESSION['autenticado'] = 'SIM';
} else {
    $_SESSION['autenticado'] = 'NAO';
    header('Location: ../../index.php?login=erro');
}