<?php
function login($user="root", $key="123"){
    echo "user = " . $user;
    echo '<br>';
    echo "key = " . $key;
}

login();

echo '<br><hr>';

login("eXcript", "123456");
?>