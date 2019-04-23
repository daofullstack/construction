<?php                                                          
               //On se connecte à mysql 
 	try {
    $bdd = new PDO('mysql:host=localhost;dbname=constructeurs', "root", null);
    
		} catch (PDOException $e) {
						    print "Erreur !: " . $e->getMessage() . "<br/>";
						    die();
		}
								
	if (isset($_POST) && !empty($_POST))
	{
			$idUserSend=$_SESSION["id"];
			$titre=$_POST["titre"];
			$article=$_POST['article']; 
		$req = $bdd->prepare('INSERT INTO
		articles(id_user_send,titre,article)
		VALUES(?,?,?)');
		$okInsert=$req->execute(array($idUserSend,$titre,$article));
		if (!$okInsert) {
			header('location:index.php?page=error');
		}

	}

		 ?>

<div> <h2 class="text-center">article</h2>
	<?php 
	$sql="select * from articles
	 ORDER BY id_article DESC LIMIT 0,20 ";
	$req=$bdd->query($sql);
	while($donnees = $req->fetch())
	{
		
	echo '<table  border="2px";cellspacing="2";cellpadding="2";
	width:800px; height:500px; style="display:inline-block";>
	<tr><th colspan="3"><center><b>'.$donnees['domaine'].'</b></center></th></tr>
	<tr>
	<td colspan="3";>
	'.$donnees["article"].'
	</td>
	</tr>
	</table>';
	}
	$req->closeCursor();
	?>
</div>
	
<div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Publier une annonce</a>
</div>
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
      	<form method="post" action="" class="text-center border border-light p-5">
		    <p class="h4 mb-4">titre</p>
		    <!-- domaine -->
		    <div class="md-form mb-5">
		    <select name="titre" class="browser-default custom-select mb-4">
		        <option value="" disabled>Choose option</option>
		        <option value="1" selected>Feedback</option>
		        <option value="2">Report a bug</option>
		        <option value="3">Feature request</option>
		        <option value="4">Feature request</option>
		    </select>
			</div>
		    <!-- Message -->
		    <div class="md-form mb-5">
		    <div class="form-group">
		        <textarea name="article" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
		    </div>
			</div>
		    <!-- Send button -->
		    <button class="btn btn-info btn-block" type="submit">publier</button>
		</form>
      </div>
    </div>
  </div>
</div>



