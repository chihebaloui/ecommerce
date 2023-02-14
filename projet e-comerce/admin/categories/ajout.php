<?php
session_start();
//1 recupiration de données de formulaire
$nom=$_POST['nom'];
$description=$_POST['description'];
$createur=$_SESSION['id'];
$date_creation=date("y-m-d");
//2 la chaine de connection
include "../../inc/functions.php";
$conn=connect();
// 3 connexion de requette
$requette="INSERT INTO ecomerce.categories(nom,description,createur,date_creation) 
VALUES ('$nom','$description','$createur','$date_creation')";
//4 execution de reqette
$resultat= $conn->query($requette);

if($resultat){
    header('location:liste.php?ajout=ok');
}
?>