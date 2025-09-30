<?php 
//Importa o arquivo de funções CRUD para fornecedores
require_once "../src/fornecedor_crud.php";

//Chama a função (passando a conexão) e receber um array associativo com os dados
$fornecedores = buscarFornecedores($conexao);

//Testando a exibição dos dados(So para o programador)
var_dump($fornecedores);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=], initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <title>Listar Fornecedores</title>
    </head>
    <body>
        <h1>Fornecedores</h1>
        <a href="">Novo fornecedor</a>
        <a href="../index.php">⬅️Voltar</a>
    </body>
</html>