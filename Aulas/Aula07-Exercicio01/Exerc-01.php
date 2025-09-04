<?php
    /*  EXERCÍCIOS

        1. Apresentar a soma de dois números

            Inicializar uma variável com um dado número (sua escolha)
            Utilize operadores de decremento e incremento

        2. Apresentar o cálculo da área de um círculo
            pi = 3,14159
            raio = 5

        3. Apresentar a área de diferentes formas geométricas
            a) Quadrado de 4cm
            b) Triângulo: base = 3 e altura = 2
            c) Trapézio: base maior = 4, base menor = 2 e altura = 3
    */
    
    echo "Exercício 1 - Apresentar a soma de dois números:<br>";
    $var = 10;
    $varb = 5;
    $soma = $var + $varb;
    echo "Variável inicializada e somada: $soma<br>";
    $soma++;
    echo "Variável incrementada: $soma<br>";
    $soma--;
    echo "Variável decrementada: $soma<br>";

    echo "<hr>";

    echo "Exercício 2 - Apresentar o cálculo da área de um círculo:<br>";
    $pi = 3.14159;
    $raio = 5;
    echo "Valor de π: $pi<br>Valor do Raio: $raio<br>";
    $area = $pi * ($raio ** 2);
    echo "Área do circulo: $area<br>";
    
    echo "<hr>";
    
    echo "Exercício 3 - Apresentar a área de diferentes formas geométricas:<br>";
    echo "a) Quadrado de 4cm.<br>";
    $quad_area = 4*4;
    echo " - Área do quadrado: $quad_area m².<br>";
    echo "b) Triângulo de base = 3 e altura = 2.<br>";
    $tria_area = (3 * 2) / 2;
    echo " - Área do triângulo: $tria_area m².<br>";
    echo "c) Trapézio: base maior = 4, base menor = 2 e altura = 3.<br>";
    $trap_area = (4 + 2) * 3 / 2;
    echo " - Área do trapézio: $trap_area m²."
?>