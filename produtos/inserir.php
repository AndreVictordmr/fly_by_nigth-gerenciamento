<?php 
    require_once "../src/fornecedor_crud.php";
    /* Se o formulario com o metodo post for acionado */
    if($_SERVER['REQUEST_METHOD']==='POST'){
        //Então vamos pegar o valor do campo chamado nome(via atributo NAME)
        $nome = $_POST['nome'];

        //Chamamos a função, passamos os dado de conexão e o valor do nome diditado

        inserirFornecedor($conexao,$nome);

        //Redireciona para a pagina lista.php
        header("location:lista.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <title>Inserir Preoduto</title>
    </head>
    <body>
        <h1>Adicionando um novo Produto</h1>
        <form action="" method="post">
            <div>
                <label for="nome">Nome:</label>
                <!-- atributo required indica um campo obrigatório-->
                <input type="text" name="nome" id="nome" required>
            </div>
            <button type="submit">Salvar</button>
        </form>

        <a href="lista.php">⬅️Voltar</a>
    </body>
</html>