<?php

$idcategorie=$_GET['idc'];

//2 la chaine de connection
include "../../inc/functions.php";
$conn=connect();
// 3 la requeete
$requette=" DELETE FROM ecomerce.categories WHERE id='$idcategorie'";

//4 execution de reqette
$resultat= $conn->query($requette);

if($resultat){
    header('location:liste.php?delete=ok');
}

 

?>