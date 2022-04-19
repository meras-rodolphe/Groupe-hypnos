<?php

require "header_gerant.php";
require "bdd_gerant.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>Bordeaux</title>
    <a href="ajouter_room_bordeaux.php">Ajouter une chambre</a>
</head>
<body>
<h1>liste des suites</h1>
    <?php $recupRoom = $bdd->query('SELECT * FROM bordeaux'); 
           
    ?>  <table class="table table-bordered">
        <thead> 
         <th>Nom de la chambre</th>
         <th>photo</th>
         <th>Nom descriptif</th>
         <th>Prix</th>
         <th>Booking</th>
        </thead>

        <tbody>
        <?php while($room = $recupRoom->fetch()){?>
            <tr>
                <td><?php echo $room['nom'];?></td>
                <td><?="<img src='./upload/".$room['name']."' width='250px' >"; ?></td>
                <td><?php echo $room['descriptif'];?></td>
                <td><?php echo $room['prix'];?></td>
                <td>Booking.</td>
                
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