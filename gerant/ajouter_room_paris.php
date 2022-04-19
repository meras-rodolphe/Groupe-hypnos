<?php
session_start();
require 'bdd_gerant.php';
require 'image.php';
require 'header_gerant.php';

if(isset($_POST['envoi'])){
    if(!empty($_POST['nom']) AND !empty($_POST['descriptif']) AND empty($_FILES['name']) AND !empty($_POST['prix'])){
        $nom = htmlspecialchars($_POST['nom']);
        $des = htmlspecialchars($_POST['descriptif']);
        $prix = htmlspecialchars($_POST['prix']); 

        $insererRoom = $bdd->prepare('INSERT INTO paris(nom, descriptif, name, prix) VALUES (?, ?, ?, ?)');
        $insererRoom->execute(array($nom,$des,$file,$prix));
        echo 'chambre bien ajouter';
    }else{
        echo 'Veuillez compléter tous les champs..';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet"  href="../style/style.css">
    <title>Ajouter une chambre</title>
</head>
<body>
   <form action="" method="POST" enctype="multipart/form-data">
       <label for="nom">Nom de la chambre</label>
       <input type="text" name="nom">
       <br>
       <label for="programme">Descriptif</label>
       <input type="text" name="descriptif">
       <br>
       <label for="prix">Prix</label>
       <input type="text" name="prix">
       <br>
       <label for="file">Ajouter photo</label>
       <input type="file" name="file">
       <br>
       <input type="submit" name="envoi">    
   </form>
</body>
<script src="../main/main.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>