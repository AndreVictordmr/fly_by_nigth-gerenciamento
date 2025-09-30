<?php
/*Neste arquivo teremos todas as funçoes que serão usadas para manipulação (CRUD) de Fornecedores em nosso sistema e banco de dados. */

// Acessando o script de conexão ao BD
require_once"../conecta.php";

/*Retornará um array associativo com os fornecedores */
function buscarFornecedores($conexao){
    //Montamos o comando SQL para a consulta
    $sql = "SELECT * FROM fornecedor ORDER BY nome";
    //Executamos o comando e gurdamos o resultado da colsuta
    $consulta=$conexao->query($sql);
    //Retornamos o resultado em formato de Array Associativo
    return $consulta->fetchAll();
}

?>