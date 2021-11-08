<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

 <div class="login-form">
   <form action="inscription_traitement.php" method="post">
       <h2 class="text-center">Inscription</h2>

       <div class="form-group">
           <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
       </div>
       <div class="form-group">
           <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
       </div>
       <div class="form-group">
           <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
       </div>
       <div class="form-group">
           <input type="text" name="nom" class="form-control" placeholder="Nom" required="required" autocomplete="off">
       </div>
       <div class="form-group">
           <input type="text" name="prenom" class="form-control" placeholder="Prénom" required="required" autocomplete="off">
       </div>
       <div class="form-group">
           <input type="date" name="date_naissance" class="form-control" placeholder="Date de naissance" required="required" autocomplete="off">
       </div>
       <div class="form-group">
           <input type="text" name="adresse" class="form-control" placeholder="adresse" required="required" autocomplete="off">
       </div>
       <div class="form-group">
           <input type="text" name="telephone" class="form-control" placeholder="Numéro de téléphone" required="required" autocomplete="off">
       </div>


       <div class="form-group">
           <button type="submit" class="btn btn-primary btn-block">Inscription</button>
       </div>
   </form>

 </div>


</body>
</html>