<?php 
    session_start(); // Démarrage de la session
    require_once 'bdd_user.php'; // On inclut la connexion à la base de données

    if(!empty($_POST['nom_user']) && !empty($_POST['password'])) // Si il existe les champs email, password et qu'il sont pas vident
    {
        // Patch XSS
        $nom = htmlspecialchars($_POST['nom_user']); 
        $password = htmlspecialchars($_POST['password']);
       
        // On regarde si l'utilisateur est inscrit dans la table utilisateurs
        $check = $bdd->prepare('SELECT * FROM users WHERE nom_user = ?');
        $check->execute(array($nom));
        $data = $check->fetch();
        $row = $check->rowCount();
  
        // Si > à 0 alors l'utilisateur existe
        if($row > 0)
        {            
                // Si le mot de passe est le bon
                if(password_verify($password, $data['password']))
                {
                    // On créer la session et on redirige sur l'hotel qui lui est associé.
                    $_SESSION['user'] = $data['token'];
                    header('Location: ../hotel.php');
                    die();
                }else{ header('Location: connexion-user.php?login_err=password'); die(); }
        }else{ header('Location: connexion-user.php?login_err=already'); die(); }
    }else{ header('Location: connexion-user.php'); die();} // si le formulaire est envoyé sans aucune données