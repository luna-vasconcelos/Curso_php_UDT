<?php
    $dados = $_POST;

    $dados = implode(" - ", $dados);

    $arquivo = fopen("cadastro.txt", "a+");

    fwrite($arquivo, $dados."\n");

    fclose($arquivo);

    header("location: tabela.php");
?>