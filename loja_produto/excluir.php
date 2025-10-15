<?php
    require_once "../src/loja_produto-crud.php";
    $idL = $_GET["idL"];
    $idP = $_GET["idP"];
    excluirEntrada($conexao,$idL,$idP);
    header("location:lista.php");
    exit;