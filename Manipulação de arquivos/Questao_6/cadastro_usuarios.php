<?php
    $dados = $_GET;

    $dados = implode(" - ", $dados);

    $arquivo = fopen("lista_usuários.txt", "a+");

    fwrite($arquivo, $dados."\n");

    fclose($arquivo);
?>