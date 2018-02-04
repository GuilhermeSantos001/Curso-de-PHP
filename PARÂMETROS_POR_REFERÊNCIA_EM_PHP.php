<?php
$a = [1,2,3];
$b = &$a;

$a[1] = 5;

print_r($a);
print_r($b);
?>