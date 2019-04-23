
<div class="container">
			<?php if ($resultat) {
					$telephone =$resultat['telephone'];
					$email =$resultat['email'];
					$experience=$resultat['experience'];
					$competences=$resultat['competences'];
					$commune=$resultat['commune'];
					$id=$resultat['id'];
					$moyenne=(($resultat['note']*100)/10);

					/* mon statut */
					$status=$resultat['disponible'];
						if ($status==true) {
								$disponibilite="pas disponible";
								$etat=0;
						}else{
								$disponibilite="disponible";
								$etat=1;
						}
						if (isset($_POST["id"]) && !empty($_POST["id"])) {
							$validerDemande="UPDATE users SET disponible ='$etat'  WHERE id= '$id'";
							$reqValider=$bdd->query($validerDemande);	
							$status=$resultat['disponible'];
						}
					echo '<div class="row z-depth-3 rounded mb-5 mt-5 justify-content-between grey lighten-3 p-2	">
							<div class="col-md-4">
								<div><a href="'.$resultat['photo'].'">
									<img class="img-thumbnail img-fluid" src="'.$resultat['photo'].'" alt="je n\'ai pas de photo pour le moment">
									</a>
								</div>
								<form action="" method="POST"><i class="font-weight-bold">Statut : </i>
									<input type="hidden" name="id"  value="'.$id.'">
									<input type="submit" class="chercher z-depth-1" value="'.$disponibilite.'">
								</form>
							</div>';
						echo "<div class='col-md-4'>
								je suis un :<span class='espace'>".$_SESSION['type_user'] ."</span><br>
								Matricule :".$resultat['id']."<br>
								Nom:".$resultat['nom']."<br>
								Prenom:".$resultat['prenom']."<br>
								Telephone:".$resultat['telephone']."<br>
								Email: ".$resultat['email']."<br>
								Reside à:".$resultat['commune'] ."<br>
								Experience: ".$resultat['experience']." années <br>
								Compétences: ".$resultat['competences']."<br>
								Niveau d'étude: ".$resultat['niveau']."<br><hr>"; 
								echo '<b>Ma Moyenne </b>: 
								<div class="progress bg-dark md-progress">
								 	<div class="progress-bar bg-warning" role="progressbar" style="width:'.$moyenne.'%"
								 	aria-valuenow="14" aria-valuemin="0" aria-valuemax="100">'.$moyenne.'%</div>
								 </div><hr>';?>
								
								</div>
							<div class="col-md-4 mt-2">
								<a href="" class="chercher float-right-top mt-5 couleur" data-toggle="modal" data-target="#modalLoginForm">Modifier mon profile
								 </a><hr>
								 <form class="needs-validation " action="" method="post" enctype="multipart/form-data"  novalidate ><h4>Ajouter une photo à ma galerie</h4>
								      <label for="image">Image</label>
								      <input type="file" name="image" id="image" placeholder="Votre photo" required >
								      <div class="invalid-feedback">
								        veuillez entrer une photo
								      </div>
								      <textarea name="commentaire" rows="2" cols="10"></textarea>
								      <input type="submit" name="ajouter" class="couleur chercher" value="ajouter">
								</form><hr>
								 
							</div>
						</div>
						<?php
				};
			 ?>			

						 <div class="text-center white">

				                <!-- Heading -->
				                <h2 class="mb-5 font-weight-bold">galerie</h2>

				                <!--Grid row-->
				                <div class="row">
				                	<?php while ($resGalerie=$reqGalerie->fetch()) {
				                		echo'<div class="col-lg-4 col-sm-6 mb-4">
				                        	<div class="overlay z-depth-1-half">
				                            	<img src="'.$resGalerie["image"].'" class="img-fluid" alt="">
				                       			 <p class="dark-text">'.$resGalerie["commentaire"].'</p>
				                        	</div>
				                    	</div>'; 
				                		}	
				                	?> 
				                </div>
				                <!--Grid row-->
			 			</div>
	</div>
</div>	 		
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Modification profile</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
		    <form method="post" action="admin/delete.php">
					<input type="hidden" name="id" value="<?php echo $id; ?>">
				<div class="md-form mb-5">
					<input type="tel" class="form-control validate" minlength="8" name="telephone" required min="0" value="<?php echo $telephone; ?>">
		          <label data-error="wrong" data-success="right" id="telephone">Telephone</label>
		        </div>
				<div class="md-form mb-5">
		          <i class="fas fa-envelope prefix grey-text"></i>
		          <input type="email" id="email" name="email" required value="<?php echo $email; ?>" class="form-control validate">
		          <label data-error="wrong" data-success="right" for="email">Email</label>
		        </div>
				<div class="md-form mb-5">
					<input type="number" class="form-control validate" name="experience" required min="0" value="<?php echo $experience; ?>">
		          <label data-error="wrong" data-success="right" id="experience">Expérience</label>
		        </div>
				<div class="md-form mb-5">
					<input type="text" class="form-control validate" name="competences" required value="<?php echo $competences; ?>">
		          <label data-error="wrong" data-success="right" id="competences">Compétences</label>
		        </div>
				<div class="md-form mb-5">
					<input type="text" class="form-control validate" name="commune" required value="<?php echo $commune; ?>">
		          <label data-error="wrong" data-success="right" id="commune">Lieu de résidence</label>
		        </div>
		        <div class="input-group">
					<button type="submit" name="update" class="btn">Update</button>
				</div>
				<button type="button" class="btn btn-outline-danger float-right waves-effect ml-auto" data-dismiss="modal">Close</button>
			</form>
      </div>
    </div>
  </div>
</div>

