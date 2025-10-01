<?php 

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
            
                
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <!--Link dinamico, ou seja, a url/endereço utiliza parametro(s) e valor(es) dinamico-->
                        <a href="editar.php">✏️Editar</a>
                        <a href="excluir.php" class="excluir">✖️Excluir</a>
                    </td>
                </tr>

            
        </table>

        <script src="../js/confirmar-exclusao.js"></script>
    </body>
</html>