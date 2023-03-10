<?php
session_start();
include "../../inc/functions.php";
$categories=getAllCategories();
$produits=getAllProducts();
?>









<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Admin profile </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">

    

    

<link href="../../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../../css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">E-SHOP</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="../../deconnexion.php">d??connexion</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../../index.php">
              <span data-feather="home" class="align-text-bottom"></span>
              Homme
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../categories/liste.php">
              <span data-feather="file" class="align-text-bottom"></span>
              categories
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              produits
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../visiteurs/liste.php">
              <span data-feather="users" class="align-text-bottom"></span>
              visiteurs
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Stocks
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../profile.php">
              <span data-feather="layers" class="align-text-bottom"></span>
             profile
            </a>
          </li>
        </ul>

       
        
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">liste des produits</h1>

       


        <div>
       <a  class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter<a/>
        </div>
       

       
      </div>
      <!--debut de liste!-->

      <?php if (isset($_GET['ajout']) && $_GET['ajout']== "ok"){
            print' <div class="alert alert-success">
            produit ajouter avec succes </div>
';
            }
            
            if (isset($_GET['delete']) && $_GET['delete']== "ok"){
              print' <div class="alert alert-success">
              produit supprimer avec succes </div>
          ';
              }
              if (isset($_GET['modif']) && $_GET['modif']== "ok"){
                print' <div class="alert alert-success">
                produit modifier avec succes </div>
            ';
                }
            
            
            
            ?>
     

      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NOM</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=0;
     foreach($produits as $index=>$p)// boucler
      {
        $i++;
        print'<tr>
        <th scope="row">'.$i.'</th>
        <td>'.$p['nom'].'</td>
        <td>'.$p['description'].'</td>
        <td>
         <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal">Modifier </a>
         <a onclick="return popUp()" href="supprimer.php?idc='.$p['id'].'" class="btn btn-danger">Supprimer </a>
  
  
        </td>
      </tr>
     
        ';
      }
    ?>
    
  </tbody>
</table>
      <div>
       

    

    </div>


    </main>
  </div>
</div>


<!-- Modal  ajouter  -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter produit </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="ajout.php" method="POST" enctype="multipart/form-data">
            <div class ="form-group">
             <input type="text" name="nom"class="form-control" placeholder="nom de produit ...">
            </div>
            <div class ="form-group">
             <textarea  name="description"class="form-control" placeholder="description de produit..."></textarea>
            </div>
            <div class ="form-group">
             <input type="number" step="0.01"name="prix"class="form-control" placeholder="prix de produit ...">
            </div>
            <div class ="form-group">
             <input type="file" name="image"class="form-control" placeholder="sl??ctionez l image  ...">
            </div>
            <div class ="form-group mb-2">
             <select  name="categorie"class="form-control" id="">
               
                <?php
                foreach($categories as $index => $c )
                print' <option value="'.$c['id'].'">'.$c['nom'].'</option>';
                ?>
             </select>
              <div class="form-group">
                <input type="number" name="quantite" class="form-control" placeholder="tapper la quantite de produit....">
              </div>
            </div>
            <input type="hidden" name="createur" value="<?php echo $_SESSION['id'] ;?>">
      
      <div class="modal-footer">
        
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </div>
    </form>
    </div>
  </div>
</div>
<?php
foreach($produits as $index=> $produits) // index boucle i
{
  ?>








  <!-- Modal  modifier  -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier produit </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="modifier.php" method="POST">
          <input type="hidden" value="<?php echo $produits['id'];?> " name="idc"/>
            <div class ="form-group">
             <input type="text" name="nom"class="form-control"  value="<?php echo $produits['nom'] ?>" placeholder="nom de produit ...">
            </div>
            <div class ="form-group">
             <textarea  name="description"class="form-control" placeholder="description de produit ..."><?php echo $produits['description'] ?></textarea>
            </div>
      </div>
      <div class="modal-footer">
        
        <button type="submit" class="btn btn-primary">Modifier</button>
      </div>
    </form>
    </div>
  </div>
</div>

  <?php
}




?>






    <script src="../../js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="../../js/dashboard.js"></script>
  
      <script>
    function popUp(){
      return confirm("vouez-vous vraiment supprimer le produits?");
    }
    </script>
  
  
    </body>
</html>