<?php
    require_once "../conecta.php";

    function buscarLojas($conexao){
        $sql = "SELECT * FROM LOJA ORDER BY NOME";

        $consulta = $conexao->query($sql);
        return $consulta->fetchAll();
    }

    function inserirLoja($conexao,$nome){
        $sql = "INSERT INTO LOJA(NOME) VALUES (:nome)";
        $consulta = $conexao->prepare($sql);
        $consulta->bindValue(":nome",$nome);
        $consulta->execute();

    }

    function buscarLojaPorId($conexao,$id){
        $sql = "SELECT * FROM LOJA WHERE ID = :id";
        $consulta = $conexao->prepare($sql);
        $consulta->bindValue(":id",$id);
        $consulta->execute();
        return $consulta->fetch();
    }

    function atualizarLoja($conexao, $nome, $id){
        $sql ="UPDATE LOJA SET NOME = :nome WHERE ID = :id";
        $consulta = $conexao->prepare($sql);
        $consulta->bindValue(":nome",$nome);
        $consulta->bindValue(":id",$id);
        $consulta->execute();
    }

    function excluirLoja($conexao,$id){
        $sql = "DELETE FROM LOJA WHERE ID =:id";
        $consulta = $conexao->prepare($sql);
        $consulta->bindValue(":id",$id);
        $consulta->execute();
    }

