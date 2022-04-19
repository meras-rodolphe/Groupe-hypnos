<?php 
require_once "header_user.php";
require "bdd_user.php";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>Connexion</title>
</head>
<body>
    <h1>Merci de vous connectez</h1>
 <div class="row">
    <div class="card" style="width: 40rem;">
        <img src="../image/chambre/chambre-22.png" class="card-img-top" alt="image/jpg">
          <div class="card-body">
          <h3>Remplir les champs</h3>
            <p>
            <form action="connexion_traitement_user.php" method="POST" >
             <input type="text" name="nom_user" placeholder="Nom">
             <input type="text" name= "password" placeholder="Password">
             <input type="submit" name="submit">
            </form>
            </p>
        </div>
    </div>
</div>
<div>
    <a href="inscription_user.php"><h1>S'inscrire</h1></a>
</div>
</body>
<script src="../main/main.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>