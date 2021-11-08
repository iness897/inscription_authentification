<?php 
require_once "configuration.php";



if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['date_naissance']) && !empty($_POST['adresse']) && !empty($_POST['telephone']))

{
    $pseudo = htmlspecialchars($_POST['pseudo']); 
    $email = htmlspecialchars($_POST['email']); 
    $password = htmlspecialchars($_POST['password']); 
    $nom = htmlspecialchars($_POST['nom']); 
    $prenom = htmlspecialchars($_POST['prenom']); 
    $date_naissance = htmlspecialchars($_POST['date_naissance']); 
    $adresse = htmlspecialchars($_POST['adresse']); 
    $telephone = htmlspecialchars($_POST['telephone']); 

    $check = $bdd->prepare('SELECT pseudo, email, password FROM utilisateurs WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == 0){
        $insert = $bdd->prepare('INSERT INTO utilisateur(pseudo, email, password, nom, prenom, date_naissance, adresse, telephone) VALUES(?,?,?,?,?,?,?,?)');
        $insert->execute(array($pseudo, $email, $password, $nom, $prenom, $date_naissance, $adresse, $telephone));

    }else{ echo"Un compte est deja existant";}
    
}





?>























