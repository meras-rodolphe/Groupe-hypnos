<?php 
    session_start(); // Démarrage de la session
    require_once 'bdd_gerant.php'; // On inclut la connexion à la base de données

    if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['nom_hotel'])) // Si il existe les champs email, password et qu'il sont pas vident
    {
        // Patch XSS
        $email = htmlspecialchars($_POST['email']); 
        $password = htmlspecialchars($_POST['password']);
        $hotel = htmlspecialchars($_POST['nom_hotel']);
        
        $email = strtolower($email); // email transformé en minuscule
        
        // On regarde si l'utilisateur est inscrit dans la table utilisateurs
        $check = $bdd->prepare('SELECT nom_hotel, email, password, token FROM personnels WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();
        
        

        // Si > à 0 alors l'utilisateur existe
        if($row > 0)
        {
            // Si le mail est bon niveau format
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                // Si le mot de passe est le bon
                if(password_verify($password, $data['password']))
                {
                    // On créer la session et on redirige sur l'hotel qui lui est associé.
                    $_SESSION['user'] = $data['token'];
                    if($data['nom_hotel'] === 'Bordeaux')
                    {
                        header('Location: bordeaux.php');
                    }
                    elseif($data['nom_hotel'] === 'Lyon')
                    {
                        header('Location: lyon.php');
                    }
                    elseif($data['nom_hotel'] === 'Paris')
                    {
                        header('Location: Paris.php');
                    }
                    elseif($data['nom_hotel'] === 'Lille')
                    {
                        header('Location: lille.php');
                    }
                    elseif($data['nom_hotel'] === 'Nantes')
                    {
                        header('Location: Nantes.php');
                    }
                    elseif($data['nom_hotel'] === 'Toulouse')
                    {
                        header('Location: toulouse.php');
                    }
                    elseif($data['nom_hotel'] === 'Strasbourg')
                    {
                        header('Location: strasbourg.php');
                    }
                    die();
                }else{ header('Location: connexion-gerant.php?login_err=password'); die(); }
            }else{ header('Location: connexion-gerant.php?login_err=email'); die(); }
        }else{ header('Location: connexion-gerant.php?login_err=already'); die(); }
    }else{ header('Location: connexion-gerant.php'); die();} // si le formulaire est envoyé sans aucune données