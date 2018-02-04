<?php

// Função que retorna a referencia da variavel e não uma copia
function &func(){
    $a = [1,2,3];
    print_r($a);

    return $a;
}

$valor = &func();
print_r($valor);


// Função que altera a variavel por uma referencia da variavel e não uma copia
$variavel_1 = 100;
function somaNaVariavel(&$variavel, $soma) {
    $variavel += $soma;
}

echo somaNaVariavel($variavel_1, 500);

echo $variavel_1;
?>