<?php 
require 'header_admin.php';
require 'bdd_admin.php';
session_start();

if(isset($_POST['submit'])){
    if(!empty($_POST['nom_hotel']) && !empty($_POST['ville']) && !empty($_POST['adresse']) ){
        $hotel = htmlspecialchars($_POST['nom_hotel']);
        $ville = htmlspecialchars($_POST['ville']);
        $adresse = htmlspecialchars($_POST['adresse']);
        
        $insererHotel = $bdd->prepare('INSERT INTO hotels (nom_hotel, ville, adresse) VALUES (?, ?, ?)');
        $insererHotel->execute(array($hotel,$ville,$adresse));
        echo 'Hotel bien ajouter';
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
    <link rel="stylesheet"  href="../style/style.css">
    <title>Ajouter un hôtel</title>
</head>
<body>
<div>
    <h1>Ajouter un hôtel</h1>
   <form method="POST">
       <label for="nom_hotel">Nom de l'hôtel</label>
       <input type="text" name="nom_hotel">
       <br>
       <label for="ville">Ville</label>
       <input type="text" name="ville">
       <br>
       <label for="adresse">Adresse</label>
       <input type="text" name="adresse">
       <br>
       <input type="submit" name="submit">
    </form>
</div>
    <h1>liste des hôtels</h1>
    <?php $recupHotel = $bdd->query('SELECT * FROM hotels');
        ?>
            
         <table class="table table-bordered">
         <thead>   
         <tr>
         <th>Nom</th>
         <th>Ville</th>
         <th>Adresse</th>
        </tr>
        </thead> 
        <tbody> 
        <tr>
        <?php while($hotel = $recupHotel->fetch()){?>
        <td><?php echo $hotel['nom_hotel']; ?></td>
        <td><?php echo $hotel['ville']; ?></td>
        <td><?php echo $hotel['adresse']; ?></td>
        </tr>
        <?php
        }   
    ?>
        </tbody>
        </table>
</body>
<script src="../main/main.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html> 