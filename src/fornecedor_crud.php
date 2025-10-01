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

/* Recebe o nome de um novo fornecedor e insece no BD */
function inserirFornecedor($conexao, $nome){
    /*Montando o comando SQL de INSERT e APLINDO um "named parameter(parâmetro nomeado)". Um parâmetro momeado nada mais é do que reservar um espaço para atribuir um valor  */
    $sql = "INSERT INTO FORNECEDOR (NOME) VALUES(:nome)";

    // Prepare o comando acima ANTES de executar no BD
    $consulta = $conexao->prepare($sql);

    //Anexar/atrelar/colocar um valor
    $consulta->bindValue(":nome",$nome);

    //Executamos a consulta com o comando e o valor
    $consulta->execute();
}
/* Recebe o id do fornecedor a ser carregado (e dopois atualizar) */
function buscarFornecedoresPorId($conexao,$id){
    $sql ="SELECT * FROM FORNECEDOR WHERE ID = :ID";
    // prepare : coloca o comando sql em memória
    $consulta = $conexao->prepare($sql);
    //bindValue: liga o valor ($id) ao parametro(:ID)
    $consulta->bindValue(":ID",$id);
    //execute: roda a queryconsulta no banco
    $consulta->execute();
    //retorna o resultado da consulta como um Array(vetor)
    return $consulta->fetch();
}