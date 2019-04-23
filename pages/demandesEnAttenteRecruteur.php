		            		<h2 class="text-center"><strong>Demandes </strong></h2>
		            		<div class="row">
		             		 	<div class="col-md-6">
		             		 		<h4>demandes approvées :</h4> 

				                		<?php
											while ($resulApRec=$resulApprouveeRecruteur->fetch()) {
											 	echo'<div class="white z-depth-1 px-3 pt-3 pb-0">
          											<ul class="list-unstyled friend-list">
          												<li class="grey lighten-3 p-2">
											                <div class="text-small">
											                  <strong><a href="index.php?page=voirProfile&id='.$resulApRec["id_demandeur"].'"> voir son profile </a></strong>
											                  <p class="last-message "><a href="index.php?page=detailAnnonce&id='.$resulApRec["id_article"].'">voir l\'annonce</a></p>
											                </div>
											                <div class="chat-footer">
											                  <p class="badge badge-success float-right text-smaller text-muted mb-0">Validée le '.$resulApRec["date_ajout_demande"].'</p>
											                  <form action="" method="POST">
											               		<select required name="note" id="note">
											               			<option selected="" disabled>Votre appréciation</option>
											               			<option value="1">1</option><option value="2">2</option>
											               			<option value="3">3</option><option value="4">4</option>
											               			<option value="5">5</option><option value="6">6</option>
											               			<option value="7">7</option><option value="8">8</option>
											               			<option value="9">9</option><option value="10">10</option>
											               		</select>
											               		<input type="hidden" name="id_demandeur" value="'.$resulApRec["id_demandeur"].'">
											               		<input type="submit" class="couleur chercher" value="noter" name="noter">
											               	</form>
											                 </div>
											              </a>
											            </li>
          											</ul>
          										</div>';
											 } $resulApprouveeRecruteur->closeCursor();
										 ?>
				               	</div>
				               	

				               	<div class="col-md-6">
				               			<h4>demandes en attente:</h4>
				               		
										<?php
											while ($resulAtRec=$resulAttenteRecruteur->fetch()) {
												
											 echo'<div class="white z-depth-1 px-3 pt-3 pb-0">
          											<ul class="list-unstyled friend-list">
          												<li class="grey d-flex justify-content-between lighten-3 p-2">
											                
											                <div class="text-small">
											                 <strong> <a href="index.php?page=voirProfile&id='.$resulAtRec["id_demandeur"].'"> voir son profile </a>
											                 </strong>
											                  <p class="last-message text-muted">
											                  	<a href="index.php?page=detailAnnonce&id='.$resulAtRec["id_article"].'">voir l\'annonce </a>
											                  </p>
											                </div>
											                <div class="chat-footer">
											                  <p class="text-smaller text-muted mb-0"> demande effectuée le: <br>'.$resulAtRec["date_ajout_demande"].' </p>
											                  <span class="badge badge-warning float-right">attente..</span>
											                </div>
											            

											            </li>
											            <li>'; $id_demande=$resulAtRec["id_demande"] ;
										?>
											            		<form action="functions/approuverDemande.php" method="POST">
																	<input type="hidden" name="idDemande"  value="<?php echo $id_demande ; ?>">
																	<input type="submit" class="chercher z-depth-5" value="accepter">
																</form>
										<?php 
											            echo'</li>
          											</ul>
          										</div>';
											 } $resulAttenteRecruteur->closeCursor();
										 ?>
				               	</div> 
		             		 </div>