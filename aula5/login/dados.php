<?php

    echo ('Dados de usuários cadastrados' . '<br> <br>');

    $nome = htmlspecialchars($_POST['nome']);
    $CPF = htmlspecialchars($_POST['CPF']);
    $dados = 'Nome: ' .$nome . '<br>' .'CPF: ' .$CPF .'<hr>' .PHP_EOL;

    $filename = "dados.txt";

    if(!file_exists("dados.txt")){
        $handle = fopen("dados.txt", "w");
    } else {
        $handle = fopen("dados.txt", "a");
    }

    
    fwrite($handle, $dados);
    /*
    fwrite($handle, 'Nome: ' .$_POST['nome']. '<br>');
    echo ('<br>');
    fwrite($handle, 'CPF: ' .$_POST['CPF'] .'<hr>');
    fflush($handle);
    fclose($handle); 
    */


    $handle = fopen("dados.txt", "r");
    while (!feof($handle)){
        $line = fgets ($handle);
        echo $line . "<br>";
    }

    fclose($handle);

   
?>