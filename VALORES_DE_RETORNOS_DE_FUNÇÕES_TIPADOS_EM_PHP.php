<?php
// Define que os tipos são restritos
declare(strict_types=1);

#VALORES DE RETORNO TIPADO

function cubo(float $num) : float
{
    return $num * $num * $num;
}

function teste() : array
{
    return [10, "eXcript", 5.1];
}

function x() : int
{
    return "aa";
}

function y($pFloat) : float
{
    return $pFloat;
}

//echo cubo(10.5);

//var_dump( teste() );

//x();

echo y(5.5);