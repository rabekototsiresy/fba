<?php
unset($_COOKIE['useranme']);
unset($_COOKIE['mdp']);
setcookie('username','',time()-10);
setcookie('username','',time());
header('location:index.php');
?>