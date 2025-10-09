<?php

require_once "../conecta.php";

function buscarProdutos($conexao){
    $sql = "SELECT PRODUTO.ID, PRODUTO.NOME as nome_produto, PRODUTO.PRECO, PRODUTO.QUANTIDADE, FORNECEDOR.NOME as nome_fornecedor FROM PRODUTO JOIN FORNECEDOR ON PRODUTO.ID_FORNECEDOR = FORNECEDOR.ID ORDER BY PRODUTO.NOME";

    $consulta = $conexao->query($sql);

    return $consulta->fetchAll();
}

function inserirProduto($conexao,$name,$descricao,$preco,$quantidade,$id_fornecedor){
    $sql = "INSERT INTO PRODUTO(NOME,DESCRICAO,PRECO,QUANTIDADE,ID_FORNECEDOR) Values(:nome,:descricao,:preco,:quantidade,:id)";
    $consulta=$conexao->prepare($sql);

    $consulta->bindValue(":nome",$name);
    $consulta->bindValue(":descricao",$descricao);
    $consulta->bindValue(":preco",$preco);
    $consulta->bindValue(":quantidade",$quantidade);
    $consulta->bindValue(":id",$id_fornecedor);

    $consulta->execute();
    
}

function buscarPodutosPorId($conexao,$id){

}

function excluirProduto($conexao,$id){
    $sql = "DELETE FROM PRODUTO WHERE ID=:ID";
    $consulta=$conexao->prepare($sql);
}