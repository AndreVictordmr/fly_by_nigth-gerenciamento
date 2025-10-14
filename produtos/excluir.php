<?php
    require_once "../src/produto-crud.php";
    $id = $_GET["id"];
    excluirProduto($conexao,$id);
    header("location:lista.php");
    exit;