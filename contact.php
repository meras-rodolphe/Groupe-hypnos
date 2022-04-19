<?php

require "header.php";
require "bdd.php";

if(isset($_POST['envoi'])){
    if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['question']) AND !empty($_POST['descriptif'])){
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $question = htmlspecialchars($_POST['question']);
        $des = htmlspecialchars($_POST['descriptif']);
         

        $insererMessage = $bdd->prepare('INSERT INTO messages(nom, prenom, email, question, descriptif) VALUES (?, ?, ?, ?, ?)');
        $insererMessage->execute(array($nom,$prenom,$email,$question,$des));
        echo 'Message bien envoyer';
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Réclamation</title>
</head>
<body>
<div class="login-form">
<form action="" method="post">
        <h2 class="text-center">Réclamation</h2>       
            <div class="form-group">
                    <input type="text" name="nom" class="form-control" placeholder="Nom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" name="prenom" class="form-control" placeholder="Prenom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                <select class="form-control" name="question">
                <option>choix de la question</option>
                <option>Je souhaite poser une réclamation</option>
                <option>Je souhaite commander un service supplémentaire</option>
                <option>Je souhaite en savoir plus sur une suite</option>
                <option> J’ai un souci avec cette application</option>
                </select>
                </div>
                <div class="form-group">
                    <textarea name="descriptif" class="form-control" placeholder="Votre texte" required="required" autocomplete="off"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="envoi" class="btn btn-secondary btn-block">Soumettre</button>
                </div>   
            </form>
        </div>
</body>
<script src="main/main.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>