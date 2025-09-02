<?php
    /* 
    VARIÁVEIS

    Referências: 
    W3Schools - https://www.w3schools.com/php/php_variables.asp
    Vídeo - 
    */
    $nome = "Alan"; // string
    $aula = "PHP";  // string
    $idade = 19;    // int
    $peso = 85.5;   // float
    $alt = 1.80;    // float

    // Utilizando variáveis
    echo "Utilizando variáveis <br>";
    echo "Meu nome: $nome <br>";
    echo 'Minha idade: $idade <br>';
    echo "Percebe-se que na linha acima a variável não foi reconhecida <br>";
    echo "Concatenando variável com texto entre aspas simples <br>";
    echo 'Minha idade: ' . $idade . '<br>'; // O '.' é usado para concatenar no PHP, COMO O '+' EM JavaScript

    // Utilizando variáveis
    echo "<p>Meu nome: $nome, tenho $idade anos de idade.</p>";
    echo "<p>Minha altura e peso são: $alt e $peso, respectivamente.</p>";

    // Informações sobre variáveis
    echo "Informações sobre variáveis <br>";
    var_dump($nome);
    echo "<br>";
    var_dump($idade);
    echo "<br>";
    var_dump($alt);
    echo "<br>";

?>