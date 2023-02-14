<?php
include"inc/functions.php";
$categories= getAllCategories();

if(isset($_GET['id'])){
   $produit = getProduitById($_GET['id']);

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
   <div class="row col-12 mt-5" >
   <div class="card col-8 offset-2" >
  <img src="image/<?php echo$produit['image'];?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $produit['nom'] ?></h5>
    <p class="card-text"><?php echo $produit['description'] ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo $produit['prix'] ?> DT</li>

    <li class="list-group-item"><?php
     if($categories['id']==$produit['categorie']){
      echo $categories['nom'];
     }

    
      ?></li>
    
  </ul>
</div>
   </div>
 <!--fin nav bar-->
      <div class="row col-12 mt-5" >

      
    
        <div class="bg-dark">
           <p class="text-white text-center p-5 mt-5">
            tout les droits réservées 2022
           
           </p>
        </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


</html>