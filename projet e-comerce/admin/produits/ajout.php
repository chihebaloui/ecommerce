<?php
session_start();
//1 recupiration de données de formulaire
$nom=$_POST['nom'];
$description=$_POST['description'];
$prix=$_POST['prix'];
$createur=$_POST['createur'];
$categorie=$_POST['categorie'];
$quantite=$_POST['quantite'];
$date=date("y-m-d");

// upload image
$target_dir = "../../image/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
     $image=$_FILES["image"]["name"];
  } else {
    echo "Sorry, there was an error uploading your file.";
  }



//2 la chaine de connection
include "../../inc/functions.php";
$conn=connect();
// 3 connexion de requette
$requette="INSERT INTO ecomerce.produits(nom,description,prix,image,categorie,createur,date_creation) 
VALUES ('$nom','$description','$prix','$image','$categorie','$createur','$date')";

//4 execution de reqette

$resultat= $conn->query($requette);


if($resultat){

  $produit_id=$conn->lastInsertId();

$requette2="INSERT INTO ecomerce.stocks(produit,quiantite,createur,date_creation) 
VALUES ('$produit_id','$quantite','$createur','$date')";

if ($conn->query($requette2)){
    
      header('location:liste.php?ajout=ok');
    }else
    {
      echo "impossible d ajouter";
    }





   
}
?>