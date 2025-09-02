<?php
    // Variáveis
    // ============================================================
    # É um espaço de memória nomeado que armazena um dado valor
    # A variável permite a modificação deste valor

    # São definidas iniciando com o sinal de "$". Exemplo
    $variavel01;  # Variável definida sem conteúdo (não inicializada)
    $variavel02 = 100;  #Variável inicializada

    $variavel02 = "Teste";  # O conteúdo da variável foi redefinido
    // Observamos que em PHP as variáveis não são tipificadas
    echo $variavel02;
    

    # Outras características das variáveis
    # "Case Sensitive"
    # Significa que as variações do tipo de caixa (alta ou baixa)
    # alteram a identificação da variável. Exemplo:
    $Variavel01;
    # A primeira letra maiúscula denota uma outra variável

    # Formas inadequadas de inicialização de variáveis
    /*
    $1var = 0;
    $!var = 0;
    $variavel(1) = 0;
    $variavel um = 0;
    $variavel-um = 0;
    */

    // Forma correta
    $var1 = 0;
    $var_um = 0;
    $varUm = 0;
    $_umUm = 0;
    $_1 = 0;

    # Não há uma forma mais correta de se nomear uma variável
    # Porém existem recomendações para seguir um mesmop padrão
    # Seguir o padrão do cliente, caso não tenha:
    # Seguir o mais tradicional. Exemplos:
    $umaVariavel = 0; # Camel Case - Padrão muito comum.
    $uma_variavel = 0; # Snake Case - Com underscore - Outro padrão.
    $UmaVariavel = 0; # Studly Case - Porém, pode ser confundida com a nomeação de classes.








    


    # Ver tipo da variável + quantidade de caracteres + exibe a variável
    var_dump($variavel02);

    # Usar '.' para concatenar
    echo $variavel02." do arquivo";

?>