<?php
//diferente
echo "DIFERENTE <br>";

var_dump( 10 != 10 );
echo "10 != 10 <br>";

var_dump( True != False );
echo "True != False <br>";

var_dump( 10 <> 10 );
echo "10 <> 10 <br>";

var_dump( False <> True );
echo "false <> True <br>";

echo "<br><br>";

//identico
var_dump( 7 === 7 );
echo "7 === 7 <br>";

var_dump( 7 === 7.0 );
echo "7 === 7.0 <br>";

echo "<br><br>";

//não identico
var_dump( 7 !== 7 );
echo "7 !== 7 <br>";

var_dump( 7 !== 7.0 );
echo "7 !== 7.0 <br>";

echo "<br><br>";

//menor
var_dump( 7 < 8 );
echo "7 < 8 <br>";

var_dump( 7 < 6 );
echo "7 < 6 <br>";

echo "<br><br>";

//maior
var_dump( 7 > 6 );
echo "7 > 6 <br>";

var_dump( 7 > 8 );
echo "7 > 8 <br>";

echo "<br><br>";

//menor ou igual
var_dump( 7 <= 7 );
echo "7 <= 7 <br>";

var_dump( 7 <= 6 );
echo "7 <= 6 <br>";

var_dump( 3 <= 7 );
echo "3 <= 7 <br>";

echo "<br><br>";

//maior ou igual
var_dump( 7 >= 7 );
echo "7 >= 7 <br>";

var_dump( 7 >= 8 );
echo "7 >= 8 <br>";

var_dump( 10 >= 7 );
echo "10 >= 7 <br>";

echo "<br><br>";

//Um integer menor que, igual a ou maior que zero quando $a é, respectivamente,
// menor que, igual a ou maior que $b. Disponível a partir do PHP 7.
var_dump(1 <=> 1);
echo "1 <=> 1 <br>";

var_dump(True <=> False);
echo "True <=> False <br>";

var_dump(False <=> True);
echo "False <=> True <br>";

var_dump(50 <=> 50);
echo "50 <=> 50 <br>";

var_dump(100 <=> 50);
echo "100 <=> 50 <br>";

var_dump(40 <=> 50);
echo "40 <=> 50 <br>";

echo "<br><br>";

?>
