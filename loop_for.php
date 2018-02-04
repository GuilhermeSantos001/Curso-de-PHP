<?php
  echo "<h1>Trabalhando com Operadores Lógicos</h1><hr>";
  echo "<br>For Comum<br>";
  // For comum
  for($num = 0; $num < 30; $num++) {
    echo $num . ",";
  }

  echo "<br><br>";
  echo "For && <br>";

  // For &&
  for($num = 0; $num < 30 && $num < 10; $num++) {
    echo $num . ",";
  }

  echo "<br><br>";
  echo "For And <br>";

  // For And
  for($num = 0; $num < 30 And $num < 20; $num++) {
    echo $num . ",";
  }

  echo "<br><br>";
  echo "For Or <br>";

  // For Or
  for($num = 0; $num < 30 Or $num < 60; $num++) {
    echo $num . ",";
  }

  echo "<br><br>";
  echo "For || <br>";

  // For ||
  for($num = 0; $num < 30 || $num < 50; $num++) {
    echo $num . ",";
  }

  echo "<br><br>";
  echo "For Xor <br>";

  // For Xor
  for($num = 0; $num < 30 Xor $num > 30; $num++) {
    echo $num . ",";
  }
?>
