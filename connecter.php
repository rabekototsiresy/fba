<?php
if(!isset($_COOKIE['username']) && !isset($_COOKIE['mdp'])){
    
    header('location:index.php');
}
echo "<h1>VOUS ETES CONNECTE</h1>";
?>
<a href="log_out.php">Log out</a>