<?php
require_once 'bdd_admin.php';
if(isset($_POST['submit'])){
    if(!empty($_POST['nom_admin']) AND !empty($_POST['email'])){
        $nom = htmlspecialchars($_POST['nom_admin']);
        $email = htmlspecialchars($_POST['email']);     
        $recupUser = $bdd->prepare('SELECT * FROM admin WHERE nom_admin = ? AND email = ?');
        $recupUser->execute(array($nom, $email));
        if ($recupUser->rowCount() > 0){
            $_SESSION['nom_admin'] = $nom;
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $recupUser->fetch()['id'];
            header('location: index.php');
        }else {
            echo "Votre Nom ou Prénom est incorrect";
        }
    }else{
        echo "Veulliez compléter tout les champs";
    }
}