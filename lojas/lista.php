<?php 
//Importa o arquivo de funções CRUD para fornecedores
require_once "../src/loja_crud.php";

//Chama a função (passando a conexão) e receber um array associativo com os dados
$lojas = buscarLojas($conexao);


?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <title>Listar Lojas</title>
    </head>
    <body>
        <h1>Lojas</h1>
        <a href="inserir.php">➕Novo Loja</a>
        <a href="../index.php">⬅️Voltar</a>

        <table>
            <caption>Relação de Lojas</caption>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>Funçoes</th>
            </tr>
            <!--As linhas(tr e td) abaixo serao geradas dinamicamente, ou seja usando um loop(foreach) no array($fornecedores)-->
            <?php foreach($lojas as $loja){// ou : ?>
                
                <tr>
                    <td><?= $loja['id']; ?></td>
                    <td><?= $loja['nome']; ?></td>
                    <td>
                        <!--Link dinamico, ou seja, a url/endereço utiliza parametro(s) e valor(es) dinamico-->
                        <a href="editar.php?id=<?=$loja['id'] ?>">✏️Editar</a>
                        <a href="excluir.php?id=<?=$loja['id']?>" class="excluir">✖️Excluir</a>
                    </td>
                </tr>

            <?php }//ou endforeach; ?>
        </table>

        <script src="../js/confirmar-exclusao.js"></script>
    </body>
</html>