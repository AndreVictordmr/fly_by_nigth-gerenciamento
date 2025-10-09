<?php

require_once "../conecta.php";

function buscarProdutos($conexao){
    $sql = "SELECT PRODUTO.ID, PRODUTO.NOME as nome_produto, PRODUTO.PRECO, PRODUTO.QUANTIDADE, FORNECEDOR.NOME as nome_fornecedor FROM PRODUTO JOIN FORNECEDOR ON PRODUTO.ID_FORNECEDOR = FORNECEDOR.ID ORDER BY PRODUTO.NOME";

    $consulta = $conexao->query($sql);

    return $consulta->fetchAll();
}