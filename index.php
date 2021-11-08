<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

 <div class="login-form">
   <form action="connexion.php" method="post">
       <h2 class="text-center">Connexion</h2>

       <div class="form-group">
           <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
       </div>
       <div class="form-group">
           <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
       </div>
       <div class="form-group">
           <button type="submit" class="btn btn-primary btn-block">Connexion</button>
       </div>
       
   </form>

   <p class="text-center">Premiére connexion ?<a href="inscription.php"> Inscription</a></p>
 </div>


</body>
</html>