<?php

$x = null;

#operador ternário
echo $x ? $x : "not value";

echo "\n";

echo $x ?: "not value";

echo "\n";

#operador Null Coalesce
echo $x ?? "not value";

echo "\n";

echo $x ?? $b ?? "not value";

echo "\n";

// $a não está definido
$b = 10;

echo $a ?? 2; // saída 2

echo "\n";

echo $a ?? $b ?? 7; // saída 10