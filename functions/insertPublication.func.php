<?php 
session_start();
  include '../functions/db.php'; 
  /*    insertion des annonces*/
   $contact=$_SESSION['telephone'] ;/*utile pour les publications */
      
  if (isset($_POST) && !empty($_POST))
  {
      $idUserSend=$_SESSION["id"];
      $domaine=$_POST["domaine"];
      $article=$_POST['article']; 
      $nomStructure=$_POST['nom_structure'];
      $nombrePlace=$_POST['nombre_place']; 
      $lieu_travail=$_POST["lieu_travail"];
      $date_debut=$_POST["date_debut"];
      $date_fin=$_POST["date_fin"];
    $req = $bdd->prepare('INSERT INTO
    articles(id_user_send,domaine,nom_structure,article,nombre_place,contact,lieu_travail,date_debut,date_fin)
    VALUES(?,?,?,?,?,?,?,?,?)');
    $okInsert=$req->execute(array($idUserSend,$domaine,$nomStructure,$article,$nombrePlace,$contact,$lieu_travail,$date_debut,$date_fin));
    if (!$okInsert) {
      header('location:../index.php?page=error');
    }else{
      header('location:../index.php?page=annonces');
    }

  }
  /*  end  insertion des annonces*/
?>