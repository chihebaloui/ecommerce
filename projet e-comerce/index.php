<?php
session_start();
include"inc/functions.php";
$categories= getAllCategories();

// bouton recherche 
  if ( !empty($_POST) ) { 
    
    $produits= searchProduits($_POST['Search']) ;
   }
   else{
    $produits= getAllProducts();
   
   }


?>





<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,Initial-Scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>e-comerce</title>
</head>
<body>
   <!--nav bar-->
   <?php
   include"inc/header.php";
   ?>
 <!--fin nav bar-->
      <div class="row col-12 mt-5" >

      <?php
      foreach($produits as $produits){
        print'<div class="col-3" mt-2>
        <div class="card" style="width: 18rem;">
            <img src="image/'.$produits['image'].'" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">'.$produits['nom'].'</h5>
              <p class="card-text">prix: '.$produits['prix'].' DT</p>
              <a href="produit.php?id='.$produits['id'].'" class="btn btn-primary">Details</a>
            </div>
          </div>
      </div>';

      }
      ?>
    
      <?php
      include "inc/fouter.php";
      ?>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>