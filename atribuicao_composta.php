<?php
  // Atribuição comum
  $num = 10;

  // Atribuição usando o null coalescing
  // Ou seja se o valor for null atribuir default
  $num2 = null;
  $num3 = $num2 ?? 'default';

  // Atribuição usando o ternário
  $num4 = 10 > 4 ? 'maior' : 'menor';

  // Atribuição composta de adição
  $num5 = 0; $num5 += 4; $num5++;

  // Atribuição composta de subtração
  $num6 = 5; $num6 -= 4; $num6--;

  // Atribuição composta de multiplicação
  $num7 = 3; $num7 *= 3;

  // Atribuição composta de divisão
  $num8 = 9; $num8 /= 3;

  // Atribuição composta de modulo, dividi e retorna o resto
  $num9 = 10; $num9 %= 2;

  // Atribuição composta de concatenação, junção de duas strings
  $num10 = 'Hello'; $num10 .= ' World!';

  // PRINTS
  echo "$num <br>"; // 10
  echo "$num3 <br>"; // default
  echo "$num4 <br>"; // maior
  echo "$num5 <br>"; // 5
  echo "$num6 <br>"; // 0
  echo "$num7 <br>"; // 9
  echo "$num8 <br>"; // 3
  echo "$num9 <br>"; // 0
  echo "$num10 <br>"; // Hello World!
?>
