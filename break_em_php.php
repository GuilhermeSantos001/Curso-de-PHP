<?php
  echo '<h1>Usando o break no PHP</h1><hr>';

  echo '<h2>While break</h2>';
  $num = 0;
  while ($num < 50) {
    $num++;

    if ($num > 30) break;

    echo $num . ', ';
  }
?>
