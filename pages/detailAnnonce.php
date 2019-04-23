<?php                                                          
	 include 'functions/db.php';
	 $idArticle=""; 
	 $idDemandeur=$_SESSION["id"];
	 if (isset($_GET["id"]) && !empty($_GET["id"])) {
	 	$idArticle=$_GET["id"];
	 }
		$sqlDetAnnonce="SELECT articles.likes,articles.date_ajout_article,articles.article, articles.id_article,articles.domaine,articles.nom_structure,articles.type_emploi,articles.nombre_place,articles.id_user_send,articles.contact,
	articles.lieu_travail,articles.date_debut,articles.date_fin,users.id,users.nom,users.prenom FROM articles INNER JOIN users ON users.id=articles.id_user_send WHERE id_article='$idArticle'";
		$req=$bdd->query($sqlDetAnnonce);	
		$donnees = $req->fetch();	
?>
<div>
	<h3>Detail annonce</h3>
	<div class="white z-depth-3 px-3 pt-3 pb-0">
          	<?php 
          		
				if($donnees)
				{
		            echo '<div class="justify-content-between grey lighten-3 p-2">
		            		<h2 class="text-center"><strong>'.$donnees['domaine'].'</strong></h2>
		            		<div class="row">
		             		 	<div class="col-md-6">
				                	<div class="text-small">
				                 		
				                  		<span class="badge badge-success ">Nombre de place: '.$donnees["nombre_place"].'
				                  		</span><br>
				                	</div>
				                	<div class="chat-footer">
				                  		<p class="text-smaller text-muted mb-0">'.$donnees["nom_structure"].'<br>Publié par:'.$donnees["nom"].' '.$donnees["prenom"].'<br>Infoline: '.$donnees["contact"].'<br>'.$donnees["date_ajout_article"].'
				                  		</p>	
				               		 </div>
				               	</div>
				               	<div class="col-md-6 text-center">
				               		'.$donnees["article"].'
				               	</div>  
		             		 </div>
		            	</div><hr>';
		            	$idRecruteur=$donnees["id_user_send"];
		        } $req->closeCursor();
		    ?>
	</div>
	<a class="couleur chercher" href="index.php?page=annonces">Retour</a>
	<?php 
		if (!empty($_SESSION)) {
			if ($_SESSION["type_user"]!='recruteur') {?>
				<form class="float-right" action="" method="POST">
					<input type="hidden" name="idDemandeur" value='<?php echo $idDemandeur; ?>'>
					<input type="hidden" name="idArticle"  value="<?php echo $idArticle; ?>">
					<input type="hidden" name="idRecruteur"  value="<?php echo $idRecruteur; ?>">
					<input class="chercher couleur" type="submit" value="postuler">
				</form>
	<?php 
			}   		
		}
	  ?>
	
</div>
	