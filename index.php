<?php 
	session_start();
  include 'functions/db.php'; 
	/* pour la gestion de la navbar si utilisateur est connecté ou pas*/
    $lienPublierAnnonce='';/*mieux en global pour gerer les erreurs*/
    $lienPublicationsAdmin='';
    $liensMesDemandes='';
    $lienMonProfil='';
    $lienGestionUser='';
    $lienProfilDispo='';
    $messageBienvenue="";

		if (isset($_SESSION) && !empty($_SESSION)) {
			 $messageBienvenue= "bienvenue ".$_SESSION["nom"] .': '.$_SESSION["type_user"];
        $lienlogin='<a class="nav-link" href="index.php?page=deconnexion">Deconnexion</a>';
        $lienMonProfil='<a  class="nav-link" href="index.php?page=monProfil">Mon profile</a>';
        $lieninscription='';
        if ($_SESSION["type_user"]=='administrateur') {
          $lienPublicationsAdmin='<a class="nav-link" href="index.php?pageAdmin=publications">Gestion Publications</a>';
           $lienGestionUser='<a class="nav-link" href="index.php?pageAdmin=admin">gestion utilisateurs</a>';
        }
        else if ($_SESSION["type_user"]=='recruteur') {
          $lienProfilDispo='<a class="nav-link" href="index.php?page=profil">profile disponible</a>';
          $liensMesDemandes='<a class="nav-link" href="index.php?page=demandesEnAttenteRecruteur">demande</a>';
          $lienPublierAnnonce='<a class="nav-link" href="" data-toggle="modal" data-target="#modalLoginForm">Publier une annonce</a>';
        }else{
          $liensMesDemandes='<a class="nav-link" href="index.php?page=statutDemande">mes demandes</a>';
        }
             
		} else {
          
	        $lienlogin='<a class="nav-link" href="index.php?page=connexion">Connexion</a>';
	        $lieninscription='<a class="nav-link" href="index.php?page=inscription">Inscription</a>';
	        
	 }
     /*pour la gestion de la page admin et ses fonctions*/
     		$pageAdmin=""; 	/*vide par defaut*/
     		$page="";	 	/*vide par defaut*/
     		$pagesAdmin=scandir('admin/');	/* scanne des pages du dossier admin */
     		$pages=scandir('pages/');		/* scanne des pages du dossier page */
			if (isset($_GET['pageAdmin']) && !empty($_GET['pageAdmin'])) {
				if (in_array($_GET['pageAdmin'].'.php', $pagesAdmin)) {
					$pageAdmin=$_GET['pageAdmin'];
				}else{
					$pageAdmin='errorAdmin';
				}
			}
	 /*pour la gestion des page pour simple utilisateur et leurs fonctions*/
			else if (isset($_GET['page']) && !empty($_GET['page'])) {
				if (in_array($_GET['page'].'.php',$pages )) {
					$page=$_GET['page'];
				} else {
					$page='error';
				}
			} 
			else {
				$page='home';
			}
	/* inclusion des pages fonctions de chaque page demandée*/
			$pagesAdminFunctions=scandir('admin/functions/');
			if (in_array($pageAdmin.'.func.php', $pagesAdminFunctions)) {
				include'admin/functions/'.$pageAdmin.'.func.php';
			}
			$pages_functions=scandir('functions/');
			if (in_array($page.'.func.php', $pages_functions)) {
				include'functions/'.$page.'.func.php';
			}

?>
<!DOCTYPE html>
<html lang="en">
	<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>les constructeurs</title>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">
<link href="css/style2.css" rel="stylesheet">
   <!-- Bootstrap core CSS --> <!-- Bootstrap core CSS --> <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="mb/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="mb/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
 <!--  <link href="mb/css/style.css" rel="stylesheet"> -->
<!-- Bootstrap core CSS --> <!-- Bootstrap core CSS --> <!-- Bootstrap core CSS -->

</head>

<body> 
<header class="couleur">

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar  ">

            <div class="container">

                <!-- Navbar brand -->
                <a class="navbar-brand" style="color: orange;" class=" font-weight-bold" href="index.php?page=home">CONSTRUCTEURS</a>

                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="basicExampleNav">

                    <!-- Links -->
                    <ul class="navbar-nav mr-auto smooth-scroll">
                       <li class="nav-item ">
                          <a class="nav-link" href="index.php?page=flash"><b>Flash</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=annonces"><b>Annonce</b></a>

                        </li>
                        <li class="nav-item">
                           <?php echo $liensMesDemandes; ?>
                        </li>
                        
                        <li class="nav-item">
                           <?php echo $lienPublierAnnonce; ?>
                        </li>
                        <li class="nav-item">
                           <?php echo $lienProfilDispo; ?>
                        </li>
                        <li class="nav-item">
                           <?php echo $lienPublicationsAdmin; ?>
                        </li>
                        <li class="nav-item">
                           <?php echo $lienGestionUser; ?>
                        </li>
                        
                    </ul>
                    <!-- Links -->
                    <form class="form-inline" method="post" action="index.php?page=recherche">
                      <div class="md-form my-0">
                        <input class="form-control mr-sm-2" required name="search" type="text" placeholder="Search" aria-label="Search">
                        <input type="submit" value="chercher" class="chercher" >
                      </div>
                    </form>
                    <!-- Social Icon  -->
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <?php echo $lienMonProfil; ?>
                        </li>
                        
                        <li class="nav-item">
                            <?php echo $lieninscription; ?>
                        </li>
                        <li class="nav-item">
                            <?php echo $lienlogin; ?>
                        </li>
                    </ul>
              </div>
            </div>
          </nav>
            <div class="mask rgba-gradient align-items-center">
              <!-- Content -->
              <div class="container ">
             
                <!--Grid row-->
                <div class="row">
                    
                  <!--Grid column-->
                  <div class="col-md-10 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s">
                     
                  </div>
                  <!--Grid column-->
                  <!--Grid column image droit-->
                 <!--  <div class="col-md-6 col-xl-5 mt-xl-5 wow fadeInRight" data-wow-delay="0.3s">
                    <img src="https://mdbootstrap.com/img/Mockups/Transparent/Small/admin-new.png" alt="" class="img-fluid">
                  </div> -->
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </div>
              <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
          </div>
          <!-- Full Page Intro -->
        </header>
        <!-- Main navigation -->
        <!--Main layout-->
    <main>
      <div class="container-fluid">
        <?php
        echo $messageBienvenue;
          if (isset($_GET['pageAdmin']) && !empty($_GET['pageAdmin'])) {
              include'admin/'.$pageAdmin.'.php';
            }else{
              include'pages/'.$page.'.php';
            }
        ?>
      </div>
    </main>
    <!--Main layout-->
    
<!-- modal de publication annonce-->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Publier un article</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <form method="post" action="functions/insertPublication.func.php" class="text-center border border-light p-2">
          <div class="form-group mb-1"><label class="orange-text font-weight-bold" for="date_debut">Debut de l'offre</label>
            <input type="date" required name="date_debut"  class="form-control rounded-0" id="date_debut">
              <label class="orange-text font-weight-bold" for="date_fin">Fin de l'offre</label>
            <input type="date" required name="date_fin" class="form-control rounded-2" id="date_fin">
          </div>
          
        <div class="md-form mb-1">
          <select name="domaine" class="browser-default custom-select mt-1" required="">
              <option value="" disabled selected>choisir le domaine</option>
              <option value="electricien">electricien</option>
              <option value="plombier">plombier</option>
              <option value="mecanicien">mecanicien</option>
              <option value="menusier">menusier</option>
              <option value="maçon">maçon</option>
              <option value="ferronier">ferronier</option>
              <option value="peintre_batiment">peintre batiment</option>
              <option value="peintre_auto">peintre auto</option>
              <option value="autre">autre domaine</option>
          </select>
        </div>
        <div class="md-form mb-1">
          <div class="form-group">
            <input type="text" name="nom_structure" placeholder="le nom de votre structure" class="form-control rounded-0" id="nom_structure">
            <input type="number" min="1" max="1000" name="nombre_place" placeholder="nombre de place disponible" required class="form-control rounded-2" id="nombre_place">
            <input type="text" name="lieu_travail" placeholder="lieu de travail" required class="form-control rounded-0" id="lieu_travail">
          </div>
        </div>
        <!-- contenue article -->
        <div class="md-form mb-1">
          <div class="form-group">
              <textarea required name="article" class="form-control rounded-0" id="article" rows="3" placeholder="Message">
              </textarea>
          </div>
      </div>
        <!-- Send button -->
        <button class="btn btn-dark btn-block" type="submit">publier</button>
    </form>
      </div>
    </div>
  </div>
</div>
<!-- end modal publication annonce -->

  
 <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/js/mdb.min.js"></script>
			<!-- pour travailler en  local -->
 <!-- SCRIPTS --> <!-- SCRIPTS --> <!-- SCRIPTS --> <!-- SCRIPTS --> <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="mb/js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="mb/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="mb/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="mb/js/mdb.min.js"></script>
	</body>
</html>