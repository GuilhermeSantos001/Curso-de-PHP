<?php

#FUNÇÕES ANÔNIMAS - ESCOPO DE NOMES

$num = 100;
$num2 = 100;

$func = function() use(&$num, $num2) {
//    echo "Anônima: " . $num;
    $num = 1500;
};

$func();

echo $num;

$x = 10;
$func = function() use ($x) {
    echo "O valor de x é: $x";
};

$func();

$x = 10;
$y = 10;
$func = function() use ($x, &$y) {
    echo "O valor de x é: $x";
    echo "O valor de y é: $y";

    $x = 0;
    $y = 0;
};

$func();

echo "-----";
echo "O valor de x é: $x";
echo "O valor de y é: $y";

$var1 = 10;
$num = ["um", "dois", "três"];
$func = function() use ($var1, &$num) {
    echo "Variável externa $var1";
};

$func();