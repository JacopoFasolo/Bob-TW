<?php
//solite cose fare sempre i controlli se è loggato o no fare un pagina è meglio, se non  sono loggato vado alla home altrimenti resto qua
require "connessione.php";
session_start();

if(isset($_REQUEST["ido"])){
	$ido=$_REQUEST["ido"]; 
    trim ($ido);
}
$comm = trim($_POST['Comm']);
trim($comm);
//fare la prova se non esiste questo rimandare alla pagina prima per favore;
echo "$comm"; echo '<br/>'; echo "$ido"; echo '<br/>'; echo $_SESSION["IDUSER"];
$idutente = $_SESSION["IDUSER"];

$toinsert = "INSERT INTO commento
		(Testo)
		VALUES
		('".$comm."')";
$result = $conn->query($toinsert);//eseguo la query
if($result){//se sono riuscito a inserire il testo del commento
	echo "ok commento";

	// faccio la select di id ultimo commento
	$sql = "SELECT max(Id_commento) FROM commento";
 	$res = $conn->query($sql);
 	$idcommins = mysqli_fetch_array($res);

 	echo '<br/>'; echo $idcommins['max(Id_commento)']; echo $ido; echo $idutente; echo '<br/>';

 	//vado a iserire nella tabella commento ins
 	$toinsert = "INSERT INTO commento_ins
	(id_com, Id_ogg, Id_ut)
	VALUES ('".$idcommins['max(Id_commento)']."','".$ido."','".$idutente."')";
	$resinsdue = $conn->query($toinsert);
	if($resinsdue){//se ho fatto inserimento del commento
		echo "inserimento 2 ok";
	}else{//andato male inserimento del commento
		echo "inserimento 2 no";
	}
	//header("location:../login.php");
}else{//se ho fallito la query di inserimento testo nel commento
	echo "non inserito";
	//header("location:../login.php?err=1");
}

// fare la query di inserimento che rimanda alla pagina di vis del prodotto..quindi mandarmi con ? andiamo qua vissci.php?ido='.$ido.';
?>