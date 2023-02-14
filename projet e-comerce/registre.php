<?php
session_start();
if(isset($_SESSION['nom'])){
  header('location:profil.php');
}
include"inc/functions.php";
$showAlert=0;
$categories= getAllCategories();

if(!empty($_POST)){// si cliquer sur sauvgarder
  if (AddVisiteur($_POST)){
    $showAlert=1;
  }

}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,Initial-Scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.0/sweetalert2.css">
  <title>e-comerce</title>
</head>
<body>
  <!--nav bar-->
  <?php
   include"inc/header.php";
   ?>

        <!-- fin nav bar-->





<div class="col-12 p-5" >
  <h1 class="text-center">registre</h1>
  <form action="registre.php" method="post">
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Nom</label>
      <input type="text" name="nom" class="form-control" id="exampleInputPassword1">
    </div>
    
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Prenom</label>
      <input type="text" name="prenom" class="form-control" id="exampleInputPassword1">
    </div>
    
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Telephone</label>
      <input type="text" name="telephone"class="form-control" id="exampleInputPassword1">
    </div>
    

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">mot de passe</label>
      <input type="password" name="mp" class="form-control" id="exampleInputPassword1">
    </div>
    
  
    <button type="submit" class="btn btn-primary">sauvgarder</button>
  </form>
</div>




<?php
      include "inc/fouter.php";
      ?>


        
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.0/sweetalert2.all.js"></script>
<?php

if($showAlert==1){
print"
<script>
    Swal.fire({
  title: 'success',
 text: 'creation du compte avec succes',
 icon: 'success',
  confirmButtonText: 'ok'

})
</script>

";}

?>


</html>