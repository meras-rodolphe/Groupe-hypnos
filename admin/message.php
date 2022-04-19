<?php
require 'header_admin.php';
require 'bdd_admin.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>Message</title>
</head>
<body>
<h1>liste des messages</h1>
    <?php $recupMessage = $bdd->query('SELECT * FROM messages');
        ?>
            
         <table class="table table-bordered">
         <thead>   
         <tr>
         <th>Nom</th>
         <th>Prénom</th>
         <th>E-mail</th>
         <th>Question</th>
         <th>Message</th>
        </tr>
        </thead> 
        <tbody> 
        <tr>
        <?php while($message = $recupMessage->fetch()){?>
        <td><?php echo $message['nom']; ?></td>
        <td><?php echo $message['prenom']; ?></td>
        <td><?php echo $message['email']; ?></td>
        <td><?php echo $message['question']; ?></td>
        <td><?php echo $message['descriptif']; ?></td>
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