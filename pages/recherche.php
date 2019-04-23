
	<div class="white z-depth-1 px-3 pt-3 pb-0"><h2 class="text-center">resultat recherche de <?php echo '<em><i>' .$motRech.'</i></em>'; ?></h2>
        <ul class="list-unstyled friend-list">
          	<?php 
				while($donnees = $req->fetch())
				{
		            echo '<li class="z-depth-4 justify-content-between grey lighten-3 p-2">
		            		<h2 class="text-center"><strong>'.$donnees['domaine'].'</strong></h2>
		            		<div class="row">
		             		 	<div class="col-md-6">
				                	
				                	<div >Nom structure :<b>'.$donnees["nom_structure"].'</b><br>
				                	Type emploi :'.$donnees["type_emploi"].'<br>
				                  		<span class="badge badge-success ">Nombre de place: '.$donnees["nombre_place"].'
				                  		</span><br>
				                	</div>
				                	<div class="chat-footer">
				                		
				                  		<p>
				                  			Publié par m.: '.$donnees["id_user_send"].'<br>
				                  			Infoline :'.$donnees["contact"].'
				             				<div>valable du :'.$donnees["date_debut"].'<br>
				             					Au :'.$donnees["date_fin"].'
				             				</div>
				             				<a href="pages/likes.php?id='.$donnees['id_article'].'" >
				             		 		<span class="liker">j\'aime ('.$donnees['likes'].')</span>
				             				</a>
				                  		</p>
				               		 </div>
				               	</div>
				               	<div class="col-md-6">
				               		text de l\'offre :<br><p>'.$donnees["article"].'</p>
				               		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										<p class="text-smaller float-right">Le '.$donnees["date_ajout_article"].'</p>
				               	</div>';
				               	if (!empty($_SESSION)) {
				               		echo '<div class="col-md-12">
				             		<a href="index.php?page=detailAnnonce&id='.$donnees['id_article'].'" >
				             		 	<span class="badge float-right">detail RDV</span>
				             		</a>
				               	</div>';
				               	}else{
				               		echo "<h5 class='text-center p-2'><i>vous devez vous connecter pour avoir plus d'information et postuler</i></h5>";
				               	}
				               	
				               
		             		 echo '</div>
		            	</li><hr>';
		        } $req->closeCursor();
		    ?>
        </ul>
	</div>
	