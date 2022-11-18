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

    // Adicionando conteudos no banco de dados
    public function adicionaDados(string $titulo, string $categoria, string $descricao): void 
    {
        $insereChamado = $this->mysql->prepare('INSERT INTO chamados (titulo, categoria, descricao) VALUES (?,?,?);');
        $insereChamado->bind_param('sss', $titulo, $categoria, $descricao);
        $insereChamado->execute();
    }
}

?>