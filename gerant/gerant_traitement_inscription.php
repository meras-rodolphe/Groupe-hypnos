<?php 
    require_once 'bdd_gerant.php'; // On inclu la connexion à la bdd

    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['nom_hotel']) && !empty($_POST['nom_gerant']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_retype']))
    {
        // Patch XSS
        $hotel = htmlspecialchars($_POST['nom_hotel']);
        $nom = htmlspecialchars($_POST['nom_gerant']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);

        // On vérifie si l'utilisateur existe
        $check = $bdd->prepare('SELECT nom_hotel, nom_gerant, email, password FROM personnels WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        $email = strtolower($email); // on transforme toute les lettres majuscule en minuscule pour éviter que Foo@gmail.com et foo@gmail.com soient deux compte différents ..
        
        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if($row == 0){ 
            if(strlen($nom) <= 100){ // On verifie que la longueur du pseudo <= 100
                if(strlen($email) <= 100){ // On verifie que la longueur du mail <= 100
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme
                        if($password === $password_retype){ // si les deux mdp saisis sont bon

                            // On hash le mot de passe avec Bcrypt, via un coût de 12
                            $cost = ['cost' => 12];
                            $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                            
                            // On stock l'adresse IP
                            $ip = $_SERVER['REMOTE_ADDR']; 
                        
                            // On insère dans la base de données
                            $insert = $bdd->prepare('INSERT INTO personnels(nom_hotel, nom_gerant, prenom, email, password, ip, token) VALUES(:nom_hotel, :nom_gerant, :prenom, :email, :password, :ip, :token)');
                            $insert->execute(array(
                                'nom_hotel' => $hotel,
                                'nom_gerant' => $nom,
                                'prenom' => $prenom,
                                'email' => $email,
                                'password' => $password,
                                'ip' => $ip,
                                'token' => bin2hex(openssl_random_pseudo_bytes(64))
                            ));
                            // On redirige avec le message de succès
                            header('Location: ajouter_gerant.php?reg_err=success');
                            die();
                        }else{ header('Location: ajouter_gerant.php?reg_err=password'); die();}
                    }else{ header('Location: ajouter_gerant.php?reg_err=email'); die();}
                }else{ header('Location: ajouter_gerant.php?reg_err=email_length'); die();}
            }else{ header('Location: ajouter_gerant.php?reg_err=pseudo_length'); die();}
        }else{ header('Location: ajouter_gerant.php?reg_err=already'); die();}
    }