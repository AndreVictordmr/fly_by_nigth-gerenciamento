<?php 
//Importa o arquivo de funções CRUD para fornecedores
require_once "../src/loja_produto-crud.php";

//Chama a função (passando a conexão) e receber um array associativo com os dados
$lojas = pegarEstoque($conexao);


?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <title>Estoques Lojas</title>
    </head>
    <body>
        <h1>Lojas</h1>
        <a href="inserir.php">➕Adicionar Estoque</a>
        <a href="../index.php">⬅️Voltar</a>

        <table>
            <caption>Estoque das Lojas</caption>
            <tr>
                <th>Loja</th>
                <th>Produto</th>
                <th>Estoque</th>
                <th>Funçoes</th>
            </tr>
            <!--As linhas(tr e td) abaixo serao geradas dinamicamente, ou seja usando um loop(foreach) no array($fornecedores)-->
            <?php foreach($lojas as $loja){// ou : ?>
                
                <tr>
                    <td><?= $loja['nome_loja']; ?></td>
                    <td><?= $loja['nome_produto']; ?></td>
                    <td><?= $loja['ESTOQUE']?></td>
                    <td>
                        <!--Link dinamico, ou seja, a url/endereço utiliza parametro(s) e valor(es) dinamico-->
                        <a href="editar.php?idL=<?=$loja['id_loja'] ?>&idP=<?=$loja['id_produto']?>">✏️Editar</a>
                        <a href="excluir.php?idL=<?=$loja['id_loja']?>&idP=<?=$loja['id_produto']?>" class="excluir">✖️Excluir</a>
                    </td>
                </tr>

            <?php }//ou endforeach; ?>
        </table>

        <script src="../js/confirmar-exclusao.js"></script>
    </body>
</html>