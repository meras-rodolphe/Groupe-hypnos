<?php 
session_start();
require_once 'bdd_admin.php';
require_once 'header_admin.php';
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getid = $_GET['id'];
    $recupAdmin = $bdd->prepare('SELECT * FROM admin WHERE id_admin = ?');
    $recupAdmin->execute(array($getid));
    if($recupAdmin->rowCount() > 0){
        $deleteAdmin = $bdd->prepare('DELETE FROM admin WHERE id_admin = ?');
        $deleteAdmin->execute(array($getid));
        header('location: index.php');
    }else{
        echo "Aucun id trouvé!";} 
}else{
    echo "Aucun administrateur trouvé";
}
?>
