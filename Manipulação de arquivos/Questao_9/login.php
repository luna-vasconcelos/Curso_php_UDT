<?php
    # Recebe os dados do formulário
    $dados = $_POST;

    # Transforma o array em string
    $dados = implode(" - ", $dados);

    # Cria um arquivo txt
    $arquivo = fopen("produtos.txt", "a+");

    # Escreve os dados do produto em um arquivo
    fwrite($arquivo, $dados."\n");

    # Fecha o arquivo
    fclose($arquivo);

    # Redireciona para a tabela com a listagem
    header("location: listaProdutos.php");
?>