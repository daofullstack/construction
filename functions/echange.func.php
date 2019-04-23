<?php 
    include 'functions/db.php'; 
	
	if (isset($_SESSION)) {
		$idUserSend=$_SESSION['id'];
	}
	if (isset($_GET["id"])) {
 		$idUserReceive=$_GET["id"];
 	}
	if (isset($_POST['message']) && !empty($_POST['message'])) {
		$message=htmlspecialchars($_POST['message']);
		$smileys = array('*e1*','*e2*','*e3*','*e4*','*e5*','*e6*','*e7*','*e8*','*e9*','*e10*','*e11*','*e12*','*e13*','*e14*','*e15*','*e16*');
        $out = array(
                '<img src="img/01.png" alt=""/>',
                '<img src="img/02.png" alt=""/>',
                '<img src="img/03.png" alt=""/>',
                '<img src="img/05.png" alt=""/>',
                '<img src="img/04.png" alt=""/>',
                '<img src="img/06.png" alt=""/>',
                '<img src="img/07.png" alt=""/>',
                '<img src="img/08.png" alt=""/>',
                '<img src="img/09.png" alt=""/>',
                '<img src="img/010.png" alt=""/>',
                '<img src="img/011.png" alt=""/>',
                '<img src="img/012.png" alt=""/>',
                '<img src="img/013.png" alt=""/>',
                '<img src="img/014.png" alt=""/>',
                '<img src="img/015.png" alt=""/>',
                '<img src="img/016.gif" alt=""/>'
            );
            $messagerep=str_replace($smileys, $out, $message);
        $stmt = $bdd->prepare("INSERT INTO messages(id_message,id_user_send,id_user_receive,message) VALUES (NULL, ?,?,?)");
        $insertOk=$stmt-> execute(array($idUserSend ,$idUserReceive,$messagerep ));
		
	}
 	
 ?>