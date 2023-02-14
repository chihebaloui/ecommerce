<?php
session_start();
if(isset($_SESSION['nom'])){
 // header('location:profil.php'); // si le client est connecter ne va pas au page connexion
}
include"../inc/functions.php";
$user=true;

if(!empty($_POST)){// si cliquer sur sauvgarder
 $user= ConnectAdmin($_POST);
 if(is_array($user) && count($user)>0){
  session_start();
  $_SESSION['id']=$user['id'];
  $_SESSION['email']=$user['email'];
  $_SESSION['nom']=$user['nom'];


  $_SESSION['mp']=$user['mp'];
  header('location:profile.php'); //l utilisateur est connectee

 }
  
  }





?>
  
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,Initial-Scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.0/sweetalert2.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>e-comerce</title>
</head>
<body>
  <!--nav bar-->
  



        
<div class="col-12 p-5" >
  <h1 class="text-center">Espace Admin :connexion </h1>
  <form action="connexion.php" method="post">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">mot de passe</label>
      <input type="password" name="mp" class="form-control" id="exampleInputPassword1">
    </div>
    
  
    <button type="submit" class="btn btn-primary">connexion</button>
  </form>
</div>




<!--fouter-->
<?php
      include "../inc/fouter.php";
      ?>
<!--fin fouter-->


        
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.0/sweetalert2.all.js"></script>

  <?php
if(!$user){
print"
<script>
    Swal.fire({
  title: 'oops',
 text: 'email ou mot de passe invalide ',
 icon: 'error',
  confirmButtonText: 'ok',
 
})
</script>

";}

?>



</html>