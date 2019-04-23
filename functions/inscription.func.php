<?php
    include 'functions/db.php'; 
    $nom=$prenom=$telephone=$experience=$competences=$email=$photo=$commune=$password=$typeUser=$niveau="";
    $target_dir = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    { 
        $target_dir = "img/";
        $target_file = $target_dir . basename($_FILES["photo"]["name"]);
        $nom = test_input($_POST["nom"]);
        $prenom = test_input($_POST["prenom"]);
        $telephone = test_input($_POST["telephone"]);
        $experience = test_input($_POST["experience"]);
        $competences = test_input($_POST["competences"]);
        $email= test_input($_POST["email"]);
        $photo= $target_file;
        $commune= test_input($_POST["commune"]);
        $password= $_POST["password"];
        $typeUser= intval($_POST["type_user"]);    
        $niveau=$_POST["niveau"];
                $pdostat = $bdd->prepare('INSERT INTO users (nom, prenom, telephone, experience, competences, email, photo, commune, disponible, password, type_user, niveau)  VALUES (:nom, :prenom, :telephone ,:experience,:competences,:email,:photo,:commune,0,:password,:type_user,:niveau)');
                $pdostat -> bindvalue(':nom',$nom , PDO::PARAM_STR);
                $pdostat -> bindvalue(':prenom',$prenom , PDO::PARAM_STR);
                $pdostat -> bindvalue(':telephone',$telephone , PDO::PARAM_STR);
                $pdostat -> bindvalue(':experience',$experience , PDO::PARAM_STR);
                $pdostat -> bindvalue(':competences',$competences , PDO::PARAM_STR);
                $pdostat -> bindvalue(':email',$email , PDO::PARAM_STR);
                $pdostat -> bindvalue(':photo',$photo , PDO::PARAM_STR);
                $pdostat -> bindvalue(':commune',$commune , PDO::PARAM_STR);
                $pdostat -> bindvalue(':password',$password , PDO::PARAM_STR);
                $pdostat -> bindvalue(':type_user',$typeUser , PDO::PARAM_STR);
                $pdostat -> bindvalue(':niveau',$niveau , PDO::PARAM_STR);
                $insertOk=$pdostat-> execute();    
                if ($insertOk) {
                        header('location:index.php?page=connexion');
                }else {
                         header('location:index.php?page=home');
                } 
        
    }
    function test_input($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

 
?>

  <script type="text/javascript">
        (function() {
    'use strict';
    window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
    form.addEventListener('submit', function(event) {
    if (form.checkValidity() === false) {
    event.preventDefault();
    event.stopPropagation();
    }
    form.classList.add('was-validated');
    }, false);
    });
    }, false);
    })();
  </script>