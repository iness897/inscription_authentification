<?php
try{
    $bdd= new PDO('mysql:host=localhost;dbname=formulaire;port=3308', 'root', 'root');
}catch(Exception $e)
{
   die('Erreur' .$e->getMessage());
}



?>