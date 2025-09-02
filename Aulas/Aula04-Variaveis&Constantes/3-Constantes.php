<?php

    /*
    TRABALHANDO COM CONSTANTES

    São utilizadas como variáveis que não devem mudar seu valor de conteúdo.
    Por padrão são definidas com letras maiúsculas
    */

    echo "Trabalhando com constantes <br>";

    // Exemplos
    # Definindo uma variável constante de nome TAXA de 50%
    define("TAXA", 0.5);
    # Definindo uma variável constante de nome JUROS de 1%
    define("JUROS", 0.01);

    // Utilizando as variáveis constantes
    echo "Valor de taxa: " . TAXA . "%<br>";
    echo "com valor de juros igual a: " . JUROS . "%<br>"

?>