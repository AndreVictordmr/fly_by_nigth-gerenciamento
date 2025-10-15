<?php 
    require_once "../src/loja_crud.php";
    require_once "../src/produto-crud.php";
    require_once "../src/loja_produto-crud.php";
    
    $lojas = buscarLojas($conexao);
    $protudos = buscarProdutos($conexao);
    /* Se o formulario com o metodo post for acionado */
    if($_SERVER['REQUEST_METHOD']==='POST'){
        //Então vamos pegar o valor do campo chamado nome(via atributo NAME)
        $idL = $_POST['loja'];
        $idP = $_POST["produto"];
        $quant = $_POST["estoque"];
        //Chamamos a função, passamos os dado de conexão e o valor do nome diditado

        novoEstoque($conexao,$idL,$idP,$quant);

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
        <title>Criar Estoque</title>
    </head>
    <body>
        <h1>Criar novo Estoque</h1>
        <form action="" method="post">
            <div>
                <label for="estoque">Quantidade:</label>
                <input type="number" name="estoque" id="estoque" min="0" require>
            </div>
            <div>
                <label for="protudo">Produto:</label>
                <select name="produto" id="produto">
                    <option value=""></option>
                    <?php foreach($protudos as $protudo){?>
                        <option value="<?=$protudo['ID']?>"><?=$protudo['nome_produto']?></option>
                    <?php }?>
                </select>
            </div>
            <div>
                <label for="loja">Lojas:</label>
                <select name="loja" id="loja">
                    <option value=""></option>
                    <?php foreach($lojas as $loja){?>
                        <option value="<?=$loja['id']?>"><?=$loja['nome']?></option>
                    <?php }?>
                </select>
            </div>
            <button type="submit">Salvar</button>
        </form>

        <a href="lista.php">⬅️Voltar</a>
    </body>
</html>