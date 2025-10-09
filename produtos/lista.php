<?php 
    require_once '../src/produto-crud.php';
    $produtos = buscarProdutos($conexao);

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <title>Listar Produtos</title>
    </head>
    <body>
        <h1>Protudos</h1>
        <a href="inserir.php">➕Novo Produto</a>
        <a href="../index.php">⬅️Voltar</a>

        <table>
            <caption>Relação de protudos</caption>
            <tr>
                <th>NOME</th>
                <th>PREÇO</th>
                <th>QUANTIDADE</th>
                <th>FORNECEDOR</th>
                <th>Funçoes</th>
            </tr>
            <!--As linhas(tr e td) abaixo serao geradas dinamicamente, ou seja usando um loop(foreach) no array($fornecedores)-->
            <?php foreach($produtos as $produto){?>
                
                <tr>
                    <td><?=$produto['nome_produto']?></td>
                    <td><?=$produto['PRECO']?></td>
                    <td><?=$produto['QUANTIDADE']?></td>
                    <td><?=$produto['nome_fornecedor']?></td>
                    <td>
                        <!--Link dinamico, ou seja, a url/endereço utiliza parametro(s) e valor(es) dinamico-->
                        <a href="editar.php?id=<?=$produto['ID'] ?>">✏️Editar</a>
                        <a href="excluir.php?id=<?=$produto['ID'] ?>" class="excluir">✖️Excluir</a>
                    </td>
                </tr>

            <?php } ?>
        </table>

        <script src="../js/confirmar-exclusao.js"></script>
    </body>
</html>