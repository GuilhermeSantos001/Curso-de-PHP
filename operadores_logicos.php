<?php
$num = 50;

if(($num > 10)&&($num < 100)){
    echo "50 > 10 e 50 < 100 : verdadeiro!";
}

echo "<br><br>";

var_dump(10 == 10);
echo "10 == 10 <br><br>";

var_dump((10 == 10) == True);
echo "10 == 10 : True <br><br>";

var_dump((10 == 10) == (7 == 7));
echo "10 == 10 : 7 == 7 <br><br>";

var_dump(True == True);
echo "True == True <br><br>";

var_dump(True);
echo "True <br><br>";

var_dump((10 == 10) and (7 == 7));
echo "10 == 10 e 7 == 7 <br><br>";

var_dump(True and True);
echo "True e True <br><br>";

var_dump(True == False);
echo "True == False <br><br>";

var_dump(False == False);
echo "False == False";

?>
