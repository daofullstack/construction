<?php  
	include 'functions/db.php'; 
	$messageInfo="";
	if (isset($_POST["telephone"]) && isset($_POST["password"])) {
			 $telephone=$_POST["telephone"];
			 $password=$_POST["password"];
			 $stmt = $bdd->prepare("SELECT * FROM users where telephone= ? AND password=? LIMIT 1");
			 $stmt->execute(array($_POST["telephone"],$_POST["password"]));
			 $result= $stmt->fetch();
				if ($result) {
					$_SESSION;
					$_SESSION['id']= $result['id'];
					$_SESSION['nom']= $result['nom'];
					$_SESSION['prenom']= $result['prenom'];
					$_SESSION['telephone']= $result['telephone'];
					$_SESSION['experience']= $result['experience'];
					$_SESSION['competences']= $result['competences'];
					$_SESSION['email']= $result['email'];
					$_SESSION['photo']= $result['photo'];
					$_SESSION['commune']= $result['commune'];
					if ($result['type_user']==1) {
						$_SESSION['type_user']='administrateur';
						header('location:index.php?pageAdmin=admin');
					} else if($result['type_user']==2) {
						$_SESSION['type_user']='recruteur';
						header('location:index.php?page=demandesEnAttenteRecruteur');
					}else{
						$_SESSION['type_user']='demandeur';
						header('location:index.php?page=annonces');
					}
				}else{
					$messageInfo='<div class="alert alert-danger"> mauvais identifiants</div>';
				}
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