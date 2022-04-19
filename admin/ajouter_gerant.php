<?php 
require 'header_admin.php';
require 'bdd_admin.php';
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet"  href="../style/style.css">
    <title>Ajouter personnel</title>
</head>
<body>
<?php 
    if(isset($_GET['reg_err']))
    {
        $err = htmlspecialchars($_GET['reg_err']);
        switch($err)
        {
        case 'success':
        ?>
    <div class="alert alert-success">
        <strong>Succès</strong> inscription réussie !
    </div>
    <?php
    break;
    case 'password':
    ?>
    <div class="alert alert-danger">
        <strong>Erreur</strong> mot de passe différent
    </div>
    <?php
    break;
    case 'email':
    ?>
    <div class="alert alert-danger">
        <strong>Erreur</strong> email non valide
    </div>
    <?php
    break;
    case 'email_length':
    ?>
    <div class="alert alert-danger">
        <strong>Erreur</strong> email trop long
    </div>
    <?php 
    break;
    case 'pseudo_length':
    ?>
    <div class="alert alert-danger">
        <strong>Erreur</strong> pseudo trop long
    </div>
    <?php 
    case 'already':
    ?>
    <div class="alert alert-danger">
        <strong>Erreur</strong> compte deja existant
    </div>
    <?php 
    }
}
?>     
   <form action="gerant_traitement_inscription.php" method="POST">
       <label for="nom_hotel">Nom de l'hotel</label>
       <input type="text" name="nom_hotel">
       <br>
       <label for="nom_gerant">Nom:</label>
       <input type="text" name="nom_gerant">
       <br>
       <label for="prenon">Prénom:</label>
       <input type="text" name="prenom">
       <br>
       <label for="email">Email:</label>
       <input type="text" name="email">
       <br>
       <label for="password">Possword:</label>
       <input type="password" name="password">
       <br>
       <label for="password">Possword:</label>
       <input type="password" name="password_retype">
       <br>
       <input type="submit" name="submit">
    </form> 
</body>
<script src="../main/main.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html> 