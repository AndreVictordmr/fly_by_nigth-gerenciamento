<?php 
require_once "../src/fornecedor_crud.php";
//Pegando da Url o valor do parametro chamado id
$id= $_GET['id'];

$fornecedor = buscarFornecedoresPorId($conexao,$id);

if($_SERVER['REQUEST_METHOD']==='POST'){
    $nome = $_POST['nome'];
    atulizarFornecedor($conexao,$nome,$id);
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
        <title>Editar fornecedor</title>
    </head>
    <body>
        <h1>Editar fornecedor</h1>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?=$fornecedor['ID']?>">
            <div>
                <label for="nome">Nome:</label>
                <!-- atributo required indica um campo obrigatório-->
                <input value="<?=$fornecedor['NOME'] ?>" type="text" name="nome" id="nome" required>
            </div>
            <button type="submit">Atualizar</button>
        </form>

        <a href="lista.php">⬅️Voltar</a>
    </body>
</html>