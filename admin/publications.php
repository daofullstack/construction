<?php                                                          
	 include 'functions/db.php'; 
	$sql="SELECT * from articles ORDER BY id_article DESC ";
	$req=$bdd->query($sql); 
	
?>

	<div class="white z-depth-1 px-3 pt-3 pb-0"><h2 class="text-center">annonces</h2>
        <ul class="list-unstyled friend-list">
          	<?php 
				while($donnees = $req->fetch())
				{
		            echo '<li class="z-depth-4 justify-content-between grey lighten-3 p-2">
		            		<h2 class="text-center"><strong>'.$donnees['domaine'].'</strong></h2>
		            		<div class="row">
		             		 	<div class="col-md-6">
				                	
				                	<div class="text-small">
				                 		 Type emploi :'.$donnees["type_emploi"].'<br>
				                  		<p class="last-message text-muted">'.$donnees["article"].'</p>
				                  		<span class="badge badge-success ">Nombre de place: '.$donnees["nombre_place"].'
				                  		</span><br>
				                	</div>
				                	<div class="chat-footer">
				                  		<p class="text-smaller text-muted mb-0">'.$donnees["nom_structure"].'<br>Publié par: <br>Infoline :'.$donnees["contact"].'<br>'.$donnees["date_ajout_article"].'
				                  		</p>
				                  			
				               		 </div>
				               	</div>
				               	<div class="col-md-6">texte annonce <br>'.$donnees["article"].'
				               		<br><br>
										<a href="admin/delete.php?idPub='.$donnees['id_article'].'">
											<span class="badge badge-danger float-right">supprimer</span>
										</a>
				               	</div></li><hr><hr>';	
		        } 
		    ?>
        </ul>
	</div>
	