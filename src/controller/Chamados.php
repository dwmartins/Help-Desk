<?php

class Chamados
{
    private $mysql;

    public function __construct(mysqli $mysqli)
    {
        $this->mysql = $mysqli;
    }

    //Exibe os dados do banco
    public function exibirtodos(): array 
    {
        $resultado = $this->mysql->query('SELECT id, titulo, categoria, descricao FROM chamados');
        $chamados = $resultado->fetch_all(MYSQLI_ASSOC);

        return $chamados;
    }
}

?>