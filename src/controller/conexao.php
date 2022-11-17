<?php

$mysql = new mysqli('localhost', 'root', '', 'help desk');

$mysql->set_charset('utf8');

if($mysql == false) {
    echo "Erro na conexão com o banco de dados";
} else {
    echo "Conectado com o banco de dados!";
}

?>