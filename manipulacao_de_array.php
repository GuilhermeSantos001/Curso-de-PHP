<?php
#VERIFICA SE A ESTRUTURA É UMA ARRAY
echo "FUNÇÃO: is_array() - " . "<br>";
echo "Valor = [] - " . is_array( [] ) . "<br>";
echo "Valor = array() - " . is_array( array() ) . "<br>";
echo "Valor = [1,2,3] - " . is_array( [1,2,3] ) . "<br>";
echo "Valor = 1 - " . is_array( 1 ) . "<br>";

echo  "<br><br>";

#RETORNA A QUANTIDADE DE ELEMENTOS
echo "FUNÇÃO: count() " . "<br>";
echo "Valor = [1,2,3,4] - " . count( [1,2,3,4] ) . "<br>";
echo "Valor = range(0,1000) - " . count( range(0,1000) ) . "<br>";

echo "<br><br>";

#VERIFICA SE UM ELEMENTO ESTÁ CONTIDO
echo "FUNÇÃO: in_array(valor, array)" .  "<br>";
echo "Valor = in_array(2, [1,2,3,4,5]) - " . in_array(2, [1,2,3,4,5]) . "<br>";
echo "Valor = in_array(6, [1,2,3,4,5]) - " . in_array(6, [1,2,3,4,5]) . "<br>";

echo "<br><br>";

#ORDENAÇÃO
echo "FUNÇÃO: sort()<br>";
$arr = ["c", "a", "b", "f"];
sort($arr);
print_r($arr);

echo "<br><br>";

#INVERSÃO
echo "FUNÇÃO: array_reverse<br>";
$arr = [1, 2, 3, 4];
$arr = array_reverse($arr);
print_r($arr);

echo "<br><br>";

#SOMA
echo "FUNÇÃO: array_sum()<br>";
$arr = [1, 2, 3, 4];
echo "A soma é: " . array_sum($arr);

echo "<br><br>";
#JUNÇÃO DE ARRAYS
echo "FUNÇÃO: array_merge()<br>";
$arr1 = [1, 2];
$arr2 = ["a", "b"];
$x = array_merge($arr1, $arr2);
print_r($x);
?>