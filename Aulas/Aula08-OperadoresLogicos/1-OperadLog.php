<?php
    /*  OPERADORES LÓGICOS

        Frequentemente utilizados com operadores de comparação
        que permitem ligar várias comparações, gerando proposição.
        AND & OR
        &&    ||  Estes sìmbolos tem precedência na execução em relação aos da linha acima
    */
    
    $a = 100;
    $b = 200;

    // O conteúdo da variável '$x' será "Booleano"
    $x = ($a < $b) && ($a < 1000); // AND -> True
    $x = ($a > $b) || ($a > 1000); // OR  -> False
    $x = ($a == 100) && ($b < $a); // AND -> False

    // Similaridade das operações realizadas acima
    $x = (true && true);   // AND -> True
    $x = (false || false); // OR  -> False
    $x = (true && false);  // AND -> False
?>