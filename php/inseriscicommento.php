<?php
//solite cose fare sempre i controlli se è loggato o no fare un pagina è meglio, se non  sono loggato vado alla home altrimenti resto qua
require "connessione.php";
session_start();

if(isset($_REQUEST["ido"])){
	$ido=$_REQUEST["ido"]; 
    trim ($ido);
}else{
	header("location:index.php");
}
$comm = trim($_POST['Comm']);
trim($comm);
//fare la prova se non esiste questo rimandare alla pagina prima per favore;
$idutente = $_SESSION["IDUSER"];

$toinsert = "INSERT INTO commento
		(Testo)
		VALUES
		('".$comm."')";
$result = $conn->query($toinsert);//eseguo la query

if($result){//se sono riuscito a inserire il testo del commento
	// faccio la select di id ultimo commento
	$sql = "SELECT max(Id_commento) FROM commento";
 	$res = $conn->query($sql);
 	$idcommins = mysqli_fetch_array($res);

 	//vado a iserire nella tabella commento ins
 	$toinsert = "INSERT INTO commento_ins
	(id_com, Id_ogg, Id_ut)
	VALUES ('".$idcommins['max(Id_commento)']."','".$ido."','".$idutente."')";
	$resinsdue = $conn->query($toinsert);
	if($resinsdue){//se ho fatto inserimento del commento
		header("Location: ".$_SERVER['HTTP_REFERER']);
	}else{//andato male inserimento del commento
		header("Location: ".$_SERVER['HTTP_REFERER']);
	}
	//header("location:../login.php");
}else{//se ho fallito la query di inserimento testo nel commento
	header("Location: ".$_SERVER['HTTP_REFERER']);
}
?>