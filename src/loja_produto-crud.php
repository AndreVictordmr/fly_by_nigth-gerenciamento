<?php

require_once "../conecta.php";

function pegarEstoque($conexao){
    $sql = "SELECT id_loja,id_produto, LOJA.NOME AS nome_loja, PRODUTO.NOME AS nome_produto, LOJA_PRODUTO.ESTOQUE FROM LOJA_PRODUTO JOIN LOJA ON LOJA.ID = LOJA_PRODUTO.ID_LOJA JOIN PRODUTO ON PRODUTO.ID = LOJA_PRODUTO.ID_PRODUTO";

    $consulta = $conexao->query($sql);
    return $consulta->fetchAll();
}

function novoEstoque($conexao,$idL,$idP,$quant){
    $sql ="INSERT INTO LOJA_PRODUTO(ID_LOJA,ID_PRODUTO,ESTOQUE) VALUES(:idL,:idP,:quant)";
    $consulta = $conexao->prepare($sql);
    $consulta->bindValue(":idL",$idL);
    $consulta->bindValue(":idP",$idP);
    $consulta->bindValue(":quant",$quant);

    $consulta->execute();
}

function atualizarEstoque($conexao,$idL,$idP,$quant){
    $sql = "UPDATE LOJA_PRODUTO SET ESTOQUE = :quant WHERE ID_LOJA = :idL AND ID_PRODUTO = :idP";
    $consulta = $conexao->prepare($sql);
    $consulta->bindValue(":idL",$idL);
    $consulta->bindValue(":idP",$idP);
    $consulta->bindValue(":quant",$quant);

    $consulta->execute();
}

function estoqueEspecifico($conexao,$idL,$idP){
    $sql = "SELECT * FROM LOJA_PRODUTO WHERE ID_LOJA = :idL AND ID_PRODUTO = :idP";
    $consulta = $conexao->prepare($sql);
    $consulta->bindValue(":idL",$idL);
    $consulta->bindValue(":idP",$idP);
    $consulta->execute();
    return $consulta->fetch();    
}

function excluirEntrada($conexao,$idL,$idP){
    $sql = "DELETE FROM LOJA_PRODUTO WHERE ID_LOJA = :idL AND ID_PRODUTO = :idP";
    $consulta = $conexao->prepare($sql);
    $consulta->bindValue(":idL",$idL);
    $consulta->bindValue(":idP",$idP);
    $consulta->execute();
}