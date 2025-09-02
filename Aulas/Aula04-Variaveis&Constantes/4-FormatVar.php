<?php
    /* 
        FORMATAÇÃO DE VARIÁVEL NUMÉRICA

        utilizando number_format()

        Referência - W3Schools:
        https://www.w3schools.com/php/func_string_number_format.asp
    */
    echo "Formatação de variável numérica <br>";
    echo "<hr>";

    # Definindo a variável
    $Val = 75.5;    # Float

    // 1. Apresentando a variável
    echo "1. Apresentando a variável <br>";
    echo "Valor da variável: R$$Val<br>";

    # Verificando o tipo da variável
    echo "<br>Verificando o tipo da variável <br>";
    echo var_dump($Val);
    echo "<br>";
    echo "<hr>";

    // 2. Formatando a variável
    echo "2. Formatando a variável<br>";
    $ValFormat = number_format($Val, 2, ',','.');
    echo "Valor da variável: R$$ValFormat<br>";

    # Verificando o tipo da variável após a formatação
    echo "<br>Verificando o tipo da variável após a formatação<br>";
    echo var_dump($ValFormat);
    echo "<br>";
?>