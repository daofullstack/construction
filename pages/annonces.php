<?php                                                          
	 include 'functions/db.php'; 
	$sql="SELECT articles.likes,articles.date_ajout_article,articles.article, articles.id_article,articles.domaine,articles.nom_structure,articles.type_emploi,articles.nombre_place,articles.id_user_send,articles.contact,
	articles.lieu_travail,articles.date_debut,articles.date_fin,users.id,users.nom,users.prenom FROM articles INNER JOIN users ON users.id=articles.id_user_send
	 ORDER BY id_article DESC ";
	$req=$bdd->query($sql);
?>
	<div class=" container white px-3 pt-3 pb-0 "><h2 class="text-center">annonces</h2>
        <ul class="list-unstyled tailles friend-list">
          	<?php 
				while($donnees = $req->fetch())
				{
		            echo '<li  id="a'.$donnees['id_article'].'" class="grey z-depth-4 justify-content-between  lighten-3 p-2">
		            		<h2 class="text-center"><strong>'.$donnees['domaine'].'</strong></h2>
		            		<div class="row" >
		             		 	<div class="col-md-6">
				                	
				                	<div >Nom structure :<b>'.$donnees["nom_structure"].'</b>
				                		<br><br>Place disponible: 
				                  		<span class="badge gb-orange">'.$donnees["nombre_place"].'
				                  		</span><br><br>

				                	</div>
				                	<a href="pages/likes.php?id='.$donnees['id_article'].'" >
				             		 		<span class="liker">j\'aime ('.$donnees['likes'].')</span>
				             				</a>
				                	<div class="chat-footer">
				                  		<p>';if (!empty($_SESSION)) {
				               					echo 'Publié par m.: '.$donnees["prenom"].' '.$donnees["nom"].'<br><br>
				                  			Infoline :'.$donnees["contact"].'<br><br>
				                  			';
				               				}
				                  			
				                  		echo'</p>
				               		 </div>
				               	</div>
				               	<div class="col-md-6">
				               	<div>	Lieu de travail: '.$donnees["lieu_travail"].'
				             				<div>Offre valable du : '.$donnees["date_debut"].'<br>
				             					Au : '.$donnees["date_fin"].'<br>
				             				</div>
				                  			
				               	</div>
				               		texte de l\'offre :<br><p>'.$donnees["article"].'
				               		
										
				               	</div><span class="text-center">Postée Le '.$donnees["date_ajout_article"].'</span>';
				               	if (!empty($_SESSION)) {
				               		if ($_SESSION["type_user"]!='recruteur') {
				               			echo '<div class="col-md-12">
				             		<a href="index.php?page=detailAnnonce&id='.$donnees['id_article'].'" >
				             		 	<span class="couleur float-right chercher">detail RDV</span>
				             		</a>	</div>';
				               		}
				               		
				               	}else{
				               		echo "<h5 class='text-center p-2'><i>vous devez vous connecter pour avoir plus d'information et postuler</i></h5>";
				               	}
				               	
				               
		             		 echo '</div>
		            	</li><hr>';
		        } 
		    ?>
        </ul>
	</div>
	