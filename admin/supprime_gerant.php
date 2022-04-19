<?php 
session_start();
require_once 'bdd_admin.php';
require_once 'header_admin.php';
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getid = $_GET['id'];
    $recupGerant = $bdd->prepare('SELECT * FROM personnels WHERE id_gerant = ?');
    $recupGerant->execute(array($getid));
    if($recupGerant->rowCount() > 0){
        $deleteGerant = $bdd->prepare('DELETE FROM personnels WHERE id_gerant = ?');
        $deleteGerant->execute(array($getid));
        header('location: index.php');
    }else{
        echo "Aucun id trouvé!";} 
}else{
    echo "Aucun administrateur trouvé";
}
?>