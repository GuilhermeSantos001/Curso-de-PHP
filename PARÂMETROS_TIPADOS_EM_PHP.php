<?php
// Define que os tipos são restritos
declare(strict_types=1);

#FUNÇÕES COM PARÂMETROS TIPADOS

function getArea(int $x, int $y){
    return $x * $y;
}

function getSum(int ...$valores){
    return array_sum($valores);
}

echo getArea(10, 5) . "\n";
echo getSum(1,2,3,4,5,6, "100");