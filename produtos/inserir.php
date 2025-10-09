<?php 
    require_once "../src/fornecedor_crud.php";
    require_once "../src/produto-crud.php";
    $fornecedors = buscarFornecedores($conexao);
    if($_SERVER['REQUEST_METHOD']==="POST"){
        $id_fornecedor=$_POST['fornecedor'];
        $nome=$_POST['nome'];
        $descricao=$_POST['descricao'];
        $preco=$_POST['preco'];
        $quantidade=$_POST['quantidade'];

        inserirProduto($conexao,$nome,$descricao,$preco,$quantidade,$id_fornecedor);

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
        <title>Inserir Produto</title>
    </head>
    <body>
        <h1>Adicionando um novo Produto</h1>
        <form action="" method="post">
            <div>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
            </div>
            <div>
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" id="descricao" rows="6"></textarea>
            </div>
            <div>
                <label for="preco">Preço:</label>
                <input type="number" name="preco" id="preco" require min="0" step="0.01">
            </div>
            <div>
                <label for="quantidade">Quantidade:</label>
                <input type="number" name="quantidade" id="quantidade" min="0" require>
            </div>
            <div>
                <label for="fornecedor">Fornecedor:</label>
                <select name="fornecedor" id="fornecedor">
                    <option value=""></option>
                    <?php foreach($fornecedors as $fornecedor){?>
                        <option value="<?=$fornecedor['ID']?>"><?=$fornecedor['NOME']?></option>
                    <?php }?>
                </select>
            </div>
            <button type="submit">Salvar</button>
        </form>

        <a href="lista.php">⬅️Voltar</a>
    </body>
</html>