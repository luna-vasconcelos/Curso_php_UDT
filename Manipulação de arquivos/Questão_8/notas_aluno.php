<?php
/**
 * QUESTÃO 8: Crie um arquivo em txt e depois converta-o para CSV. Depois leia o CSV resultante e exiba os dados em uma tabela.
 * Criar o formulário em html com notas de alunos ✅
 * Criar o php para criar o arquivo txt a partir do form ✅
 * transformar em csv 
 * Criar o php para ler o csv e exibir em tabela 
 */

    # Recebe os dados do formulário
    $dados = $_POST;

    $dados = implode(" - ", $dados);

    # Cria um arquivo txt
    $arquivo = fopen("notas.txt", "a+");

    # Escreve os dados do produto em um arquivo
    fwrite($arquivo, $dados."\n");

    $list = array(
        array('text'),
        array('text'),
        array('text'),
        array('text')
    );

    fgetcsv($arquivo, "w");

    fclose($arquivo);

    header("location: listaNotas.php");
?>