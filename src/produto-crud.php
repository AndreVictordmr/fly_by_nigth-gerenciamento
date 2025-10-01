<?php

require_once "../conecta.php";

function buscarProdutos($conexao){
    $sql = "SELECT SELECT PRODUTO.NOME, PRODUTO.DESCRICAO, FORNECEDOR.NOME FROM PRODUTO JOIN FORNECEDOR ON PRODUTO.ID_FONECEDOR = FORNECEDOR.ID";

    $consulta = $conexao->query($sql);

    return $consulta->feacthAll();
}