<?php 
require_once "../src/loja_produto-crud.php";
//Pegando da Url o valor do parametro chamado id
$idL= $_GET['idL'];
$idP= $_GET['idP'];

$loja = estoqueEspecifico($conexao,$idL,$idP);

if($_SERVER['REQUEST_METHOD']==='POST'){
    $estoque = $_POST['estoque'];
    atualizarEstoque($conexao,$idL,$idP,$estoque);
    //Após redirecionar usando header()...
    header("location:lista.php");
    //...Sempre encerre/interrompa o screipt(evitando erros/execuções adicionais)
    exit;
}

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <title>Editar Estoque</title>
    </head>
    <body>
        <h1>Editar Estoque</h1>
        <form action="" method="post">
            <p><strong>Loja: </strong><?=$loja['nome_loja']?></p>
            <p><strong>Produto: </strong><?=$loja['nome_produto']?></p>
            <div>
                <label for="estoque">Estoque:</label>
                <!-- atributo required indica um campo obrigatório-->
                <input value="<?=$loja['ESTOQUE'] ?>" type="text" name="estoque" id="nome" required>
            </div>
            <button type="submit">Atualizar</button>
        </form>

        <a href="lista.php">⬅️Voltar</a>
    </body>
</html>