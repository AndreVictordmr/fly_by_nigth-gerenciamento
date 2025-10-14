<?php 
    require_once "../src/fornecedor_crud.php";
    require_once "../src/produto-crud.php";
    $fornecedores = buscarFornecedores($conexao);
    // $_GET - Variavel responsavel para pegar dados na url
    // $_POST - Variavel responsavel por pegar dados dos no campo formulario
    $id=$_GET['id'];

    $produto = buscarPodutoPorId($conexao,$id);
    if($_SERVER['REQUEST_METHOD']==="POST"){
        $id_fornecedor=$_POST['fornecedor'];
        $nome=$_POST['nome'];
        $descricao=$_POST['descricao'];
        $preco=$_POST['preco'];
        $quantidade=$_POST['quantidade'];

        atualizarProduto($conexao,$nome,$descricao,$preco,$quantidade,$id_fornecedor,$id);

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
        <title>Editar Produto</title>
    </head>
    <body>
        <h1>Editar Produto</h1>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?=$produto['id']?>">
            <div>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" value="<?=$produto['nome']?>" required>
            </div>
            <div>
                <label for="descricao">Descrição:</label>
                <!-- Não dê enter ou identação dentro da tag textarea, pois os espaços vão aparecer se fizer isso. Portando, deixe tudo na mesma linha -->
                <textarea name="descricao" id="descricao" rows="6"><?=$produto['descricao']?></textarea>
            </div>
            <div>
                <label for="preco">Preço:</label>
                <input value="<?=$produto['preco']?>" type="number"  name="preco" id="preco" require min="0" step="0.01">
            </div>
            <div>
                <label for="quantidade">Quantidade:</label>
                <input value="<?=$produto['quantidade']?>" type="number" name="quantidade" id="quantidade" min="0" require>
            </div>
            <div>
                <label for="fornecedor">Fornecedor:</label>
                <select name="fornecedor" id="fornecedor">
                    <option value=""></option>
                    <?php foreach($fornecedores as $fornecedor){?>
                        <!-- Lógica de condicional abaixo é: 
                         Se o ID do fornecedor aqui da lista de opções for IGUAL ao fornecedor do produto que escolhesmos editar, então faça com que fique selecionado. Caso contrario, não faça nada.--> 
                        <option value="<?=$fornecedor['ID']?>" <?= $fornecedor['ID'] ===$produto["id_fornecedor"] ? "selected" : " " ?>><?=$fornecedor['NOME']?></option>
                    <?php }?>
                </select>
            </div>
            <button type="submit">Atualizar</button>
        </form>

        <a href="lista.php">⬅️Voltar</a>
    </body>
</html>