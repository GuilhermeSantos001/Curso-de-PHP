<?php
echo "Criar uma variavel com o nome de um valor de outra variavel<br>";
echo "Deve ser usado $$ para criar a variavel<br>";
echo "A variavel é salva na memoria do programa<br>";

$varvar = "teste";
$$varvar = 50;

echo $varvar . "<br>";
echo $$varvar . "<br>";
echo $teste . "<br>";
?>
