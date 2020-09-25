<?php 

session_start();

echo 'Login';

    $username = 'abedin';
    $password = 'password';

    if($username == 'abedin' && $password == 'password'){

         $_SESSION['username'] = 'abedin';
         $_SESSION['loggin'] = true;

    } else {

        $_SESSION['loggin'] = false;

    }

?>

