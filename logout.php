<?php 

session_start();

session_destroy();


//cookies delete

setcookie('emailcookie','',time()-86400);

setcookie('emailcookie','',time()-86400);

header('location:login.php');

?>