<?php 
require_once "../src/loja_crud.php";
//Pegando da Url o valor do parametro chamado id
$id= $_GET['id'];

$loja = buscarLojaPorId($conexao,$id);

if($_SERVER['REQUEST_METHOD']==='POST'){
    $nome = $_POST['nome'];
    atualizarLoja($conexao,$nome,$id);
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
        <title>Editar Lojas</title>
    </head>
    <body>
        <h1>Editar Loja</h1>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?=$loja['id']?>">
            <div>
                <label for="nome">Nome:</label>
                <!-- atributo required indica um campo obrigatório-->
                <input value="<?=$loja['nome'] ?>" type="text" name="nome" id="nome" required>
            </div>
            <button type="submit">Atualizar</button>
        </form>

        <a href="lista.php">⬅️Voltar</a>
    </body>
</html>