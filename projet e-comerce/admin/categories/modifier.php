<?php
session_start();
//1 recupiration de données de formulaire
$id=$_POST['idc'];
$nom=$_POST['nom'];
$description=$_POST['description'];
$date_modification=date("y-m-d");
//2 la chaine de connection
include "../../inc/functions.php";
$conn=connect();
// 3 connexion de requette
$requette="UPDATE ecomerce.categories SET nom='$nom',description='$description',date_modification='$date_modification' WHERE id='$id'";
//4 execution de reqette
$resultat= $conn->query($requette);

if($resultat){
    header('location:liste.php?modif=ok');
}
?>