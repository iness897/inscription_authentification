<?php 

session_start();
require_once "configuration.php";

if(!empty($_POST['email']) && !empty($_POST['password']))
{
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $check = $bdd->prepare('SELECT pseudo, email, password FROM utilisateur WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();
    
    if($row > 0){

        // Si le mail est bon niveau format
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            if($data['password'] === $password){
                $_SESSION['user'] = $data['pseudo'];
                    header('Location: bonjour.php');
                    die();
            }else{echo "mot de passe incorrect";}
        }else{ echo"email incorrect";}

    }else{ echo "compte inexistant";}

}else{ header('Location: index.php'); die();}

?>