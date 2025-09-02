<?php
    /*  OPERADORES DE INCREMENTO E DECREMENTO

        Permitem adicionar ou subtrair uma unidade da variável

        Exemplos:
    */

    $y = 1;
    echo "$y<br>";

    // Exemplos Fase 1 - Incremento
    // Tradicional - Soma uma unidade na variável
    $y = $y + 1;
    echo "$y<br>";

    // Operador de Pós-incremento (Com o mesmo efeito do código acima)
    $y++;
    echo "$y<br>";

    // Operador de Pré-incremento 
    ++$y;
    echo "$y<br>";

    // Exemplos Fase 2 - Decremento
    // Tradicional - Subtrair uma unidade na variável
    $y = $y - 1;
    echo "$y<br>";

    // Operador de Pós-decremento (Com o mesmo efeito do código acima)
    $y--;
    echo "$y<br>";

    // Operador de Pré-decremento
    --$y;
    echo "$y<br>";

?>