<?php
require 'bdd.php';
require 'header.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Nos hôtels</title>
</head>
<body>

<div class="card-deck">
<div class="card">
  <img src="image/hotel/hotel-bordeaux.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Bordeaux</h5>
    <p class="card-text">Hôtel de Bordeaux, en bords de Garonne.<br>Adresse: quai de la Garonne</p>
    <a href="user/bordeaux_user.php" class="btn btn-info">Voir</a>
  </div>
</div>

<div class="card">
  <img src="image/hotel/hotel-lille.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Lille</h5>
    <p class="card-text">Hôtel de Lille, proche du befroi<br>Adresse: Place du beffroi.</p>
    <a href="user/lille_user.php" class="btn btn-info">Voir</a>
  </div>
</div>

<div class="card">
  <img src="image/hotel/hotel-lyon.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">lyon</h5>
    <p class="card-text">Hôtel de lyon, proche de la fouvère.<br>Adresse: rue de la croix rousse.</p>
    <a href="user/lyon_user.php" class="btn btn-info">Voir</a>
  </div>
</div>

<div class="card">
  <img src="image/hotel/hotel-nantes.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Nantes</h5>
    <p class="card-text">Hôtel de Nantes, sur l’île des machines.<br>Adresse: Place des machines.</p>
    <a href="user/nantes_user.php" class="btn btn-info">Voir</a>
  </div>
</div>

<div class="card">
  <img src="image/hotel/hotel-paris.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Paris</h5>
    <p class="card-text">Hôtel de Paris, sur l’île de la cité.<br>Adresse: Place de la cité.</p>
    <a href="user/paris_user.php" class="btn btn-info">Voir</a>
  </div>
</div>
<div class="card">
  <img src="image/hotel/hotel-strasbourg.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Strasbourg</h5>
    <p class="card-text">Hôtel de Strasbourg, quartier de l'europe<br>Adresse: Place de l'europe.</p>
    <a href="user/strasbourg_user.php" class="btn btn-info">Voir</a>
  </div>
</div>

<div class="card">
  <img src="image/hotel/hotel-toulouse.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Toulouse</h5>
    <p class="card-text">Hôtel de Toulouse, hyper centre.<br>Adresse: Place des carmes.</p>
    <a href="user/toulouse_user.php" class="btn btn-info">Voir</a>
  </div>
</div>
</div>

</body>
</body>
<script src="main/main.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>