<?php
  echo '<h1>Cria um sequencia numerica com intervalo ou não</h1><hr>';
  
  echo '<h2>Sequencia de 1 a 11 com intervalo de 2</h2>';
  $sequencia = range(1, 11, 2);
  print_r($sequencia);

  echo '<h2>Sequencia de A a Z com intervalo de 2</h2>';
  $sequencia = range('a', 'z', 2);
  print_r($sequencia);
?>