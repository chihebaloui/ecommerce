<?php
function connect(){
    // connection vers bases 

    $servername="localhost";
    $DBuser="root";
    $DBpassword="";
    $DBname="ecomerce";
    try {
        $conn = new PDO("mysql:host=$servername;DBname=DBname", $DBuser, $DBpassword);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
      return $conn;
}
function getAllCategories(){
     // connection vers bases 
    $conn=connect();
    //2 creation des requet
    $requette = "SELECT*  FROM ecomerce.categories";
    //3 exection les requet
    $resultat=$conn -> query($requette);
    //4 resultat de la requet
    $categories = $resultat -> fetchAll();
    return $categories;
}
function getAllProducts(){
     // connection vers bases 
     $conn=connect();
      //2 creation des requet
      $requette = "SELECT*  FROM ecomerce.produits";
      //3 exection les requet
      $resultat=$conn -> query($requette);
      //4 resultat de la requet
      $produits = $resultat -> fetchAll();
      return $produits;
}

function searchProduits($keyswords)
{
     // connection vers bases 
    $conn=connect();
          //2 creation des requet
      $requette = "SELECT*  FROM ecomerce.produits where nom LIKE '%$keyswords%' ";
       //3 exection les requet
       $resultat=$conn -> query($requette);
       //4 resultat de la requet
      $produits = $resultat -> fetchAll();
      return $produits;
      }




      function getProduitById($id){
          // connection vers bases 
        $conn=connect();
        //2creation du requette 
        $requette= "SELECT * FROM ecomerce.produits WHERE id=$id";
         //3 exection les requet
      $resultat=$conn -> query($requette);
      //4 resultat de la requet
      $produit= $resultat -> fetch();
      return $produit;

      }

    function AddVisiteur($data){
        // connection vers bases 
    $conn=connect();
  
    //2creation du requette 
    $requette= "INSERT INTO ecomerce.visiteurs(nom,prenom,telephone,email,mp)
                        VALUES ('".$data["nom"]."','".$data['prenom']."','".$data['telephone']."','".$data['email']."','".$data['mp']."')";
     
       $resultat=$conn -> query($requette);
      if($resultat)
      {

        return true;
       }
        else{
            return false;}
        }
            
      function ConnectVisiteur($data){
         // connection vers bases 
    $conn=connect();
    $email=$data['email'];
    $mp=$data['mp'];
     //2creation du requette 
     $requette= "SELECT * FROM ecomerce.visiteurs WHERE email='$email'AND mp='$mp'";
     //3 exection les requet
    $resultat=$conn -> query($requette);
    $user=$resultat -> fetch();
   return $user ;

}
     function ConnectAdmin($data){
       // connection vers bases 
    $conn=connect();
    $email=$data['email'];
    $mp=$data['mp'];
     //2creation du requette 
     $requette= "SELECT * FROM ecomerce.admin WHERE email='$email'AND mp='$mp'";
     //3 exection les requet
    $resultat=$conn -> query($requette);
    $user=$resultat -> fetch();
   return $user ;


     }; 
    
      
     function getAllUsers(){
       // connection vers bases 
    $conn=connect();
       //2creation du requette 
       $requette= "SELECT * FROM ecomerce.visiteurs WHERE etat=0";
       //3 exection les requet
      $resultat=$conn -> query($requette);
      $user=$resultat -> fetchAll();
     return $user ;
  
  



     }

?>