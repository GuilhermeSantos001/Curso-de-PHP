<?php
/* Usando "mysqli" em vez de "mysql" que é obsoleto.
* Altere o valor do parâmetro 3 se você configurou uma senha no 
* usuário root
* Adicione o número da porta 3307 no parâmetro número 5 para usar 
* o MariaDB em vez do MySQL
*/
$mysqli = new mysqli('127.0.0.1', 'root', '', '');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
echo '<p>Connection OK '. $mysqli->host_info.'</p>';
echo '<p>Server '.$mysqli->server_info.'</p>';
$mysqli->close();
?>
