		            		<h2 class="text-center orange-text h2 font-weight-bold"><strong>Mes demandes </strong></h2>
		            		<div class="row">
		             		 	<div class="col-md-6">
		             		 		<h4  class="h4">demandes approvée :</h4> 
				                		<?php
											while ($resulAp=$resulApprouvee->fetch()) {
											 	echo'<div class="white z-depth-1 px-3 pt-3 pb-0">
          											<ul class="list-unstyled friend-list justify-content-between">
          												<li class="grey lighten-3 p-2">
											                <div>
											                  <strong><a href="index.php?page=detailAnnonce&id='.$resulAp["id_article"].'">'.$resulAp["domaine"].'</a></strong>
											                  <p>
											                  	chez : '.$resulAp["nom_structure"].' <br>
											                  	A : '.$resulAp["lieu_travail"].' <br>
											                  </p>
											                </div>
											                <div class="chat-footer">
											                  <p class="badge float-right badge-success text-smaller text-muted mb-0">Approuvée le '.$resulAp["date_ajout_demande"].'</p>
											                </div>
											            </li>
          											</ul>
          										</div>';
											 } $resulApprouvee->closeCursor();
										 ?>
				               	</div>
				               	<div class="col-md-6">
				               			<h4 class="h4">demandes en attente:</h4>
				               		
										<?php
											while ($resulAt=$resulAttente->fetch()) {
											 echo'<div class="white z-depth-1 px-3 pt-3 pb-0">
          											<ul class="list-unstyled friend-list justify-content-between">
          												<li class="grey lighten-3 p-2">
											                <div>
											                  <strong><a href="index.php?page=detailAnnonce&id='.$resulAt["id_article"].'">'.$resulAt["domaine"].'</a></strong>
											                </div>
											                <div class="chat-footer">
											                  <p class=" mb-0">Chez: '.$resulAt["nom_structure"].'<br>
											                   A: ' .$resulAt["lieu_travail"].'
											                  </p>
											                  <span class="badge badge-warning float-right">effectuée le  '.$resulAt["date_ajout_demande"].' 
											                  </span>
											                </div>
											            </li>
          											</ul>
          										</div>';
											 } $resulAttente->closeCursor();
										 ?>
				               	</div> 
		             		 </div>