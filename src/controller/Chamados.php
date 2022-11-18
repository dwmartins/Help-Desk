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
        $resultado = $this->mysql->query('
                                        SELECT 
                                            id, titulo, categoria, descricao 
                                        FROM 
                                            chamados');
        $chamados = $resultado->fetch_all(MYSQLI_ASSOC);

        return $chamados;
    }

    // Adicionando conteudos no banco de dados
    public function adicionaDados(string $titulo, string $categoria, string $descricao): void 
    {
        $insereChamado = $this->mysql->prepare('
                                                INSERT INTO 
                                                    chamados (titulo, categoria, descricao) 
                                                VALUES 
                                                    (?,?,?);');
        $insereChamado->bind_param('sss', $titulo, $categoria, $descricao);
        $insereChamado->execute();
    }

    // Atualiza os conteudos no banco de dados
    public function atualizaDados(string $id, string $titulo, string $categoria, string $descricao) : void
    {

        $atualizaDados = $this->mysql->prepare("
                                            UPDATE 
                                                chamados 
                                            SET 
                                                titulo = '$titulo', 
                                                categoria = '$categoria', 
                                                descricao = '$descricao' 
                                            WHERE 
                                                id = '$id' ");
        $atualizaDados->execute();
    }

    // Deletar conteudo do banco de dados
    public function deletarDados(string $id) :void 
    {
        $removerDados = $this->mysql->prepare("
                                            DELETE 
                                            FROM 
                                                chamados 
                                            WHERE 
                                                id = $id");
        $removerDados->execute();
    }

    public function encontrarId(string $id): array 
    {
        $selecionaDados = $this->mysql->prepare('
                                                SELECT 
                                                    id, titulo, categoria, descricao 
                                                FROM
                                                    chamados 
                                                WHERE 
                                                    id = ?');
        $selecionaDados->bind_param('s', $id);
        $selecionaDados->execute();
        $chamado = $selecionaDados->get_result()->fetch_assoc();

        return $chamado;
    }

}

?>