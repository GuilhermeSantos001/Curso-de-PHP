<?php
define("TESTE", 10);
echo TESTE . "<br>";

for($x=0; $x<=10; $x++)
  define("CONSTANTE".$x, $x);

echo CONSTANTE2 . "<br>";
echo CONSTANTE4 . "<br>";
echo CONSTANTE8 . "<br>";
echo CONSTANTE10 . "<br>";

const VALOR = 1000;
echo VALOR . "<br>";
?>
