<?php 
//Importa o arquivo de funções CRUD para fornecedores
require_once "../src/fornecedor_crud.php";

//Chama a função (passando a conexão) e receber um array associativo com os dados
$fornecedores = buscarFornecedores($conexao);

/*Testando a exibição dos dados(So para o programador)
echo "<pre>";
var_dump($fornecedores);
echo "</pre>";
*/
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
        <a href="inserir.php">➕Novo fornecedor</a>
        <a href="../index.php">⬅️Voltar</a>

        <table>
            <caption>Relação de Fornecedores</caption>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>Funçoes</th>
            </tr>
            <!--As linhas(tr e td) abaixo serao geradas dinamicamente, ou seja usando um loop(foreach) no array($fornecedores)-->
            <?php foreach($fornecedores as $fornecedor){// ou : ?>
                
                <tr>
                    <td><?= $fornecedor['ID']; ?></td>
                    <td><?= $fornecedor['NOME']; ?></td>
                    <td>
                        //Link dinamico, ou seja, a url/endereço utiliza parametro(s) e valor(es) dinamico
                        <a href="editar.php?id=<?=$fornecedor['ID'] ?>">✏️Editar</a>
                        <a href="">✖️Excluir</a>
                    </td>
                </tr>

            <?php }//ou endforeach; ?>
        </table>
    </body>
</html>