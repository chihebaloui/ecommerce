<?php

$idvisiteurs=$_GET['id'];
//2 la chaine de connection
include "../../inc/functions.php";
$conn=connect();

$requette="UPDATE ecomerce.visiteurs SET etat=1 WHERE id='$idvisiteurs'";
//4 execution de reqette
$resultat= $conn->query($requette);

if($resultat){
    header('location:liste.php?valider=ok');
}

?>