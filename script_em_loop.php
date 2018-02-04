<?php
  // Esse script está em loop e pode travar o navegador
  $num = 0;

  while($num < 1){
      if ($num <= -100) $num = 1;
      $num--;
      echo $num . "\n";
  }
?>
