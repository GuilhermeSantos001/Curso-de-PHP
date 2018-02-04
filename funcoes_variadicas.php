<?php
function media($msg, ...$valores){

    $x = array_sum($valores) / count($valores);

    return $msg . ' ' . $x;
}

echo media('Sua Media:', 8, 5, 6, 7);
?>