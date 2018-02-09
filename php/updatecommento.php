<?php
//solite cose fare sempre i controlli se è loggato o no fare un pagina è meglio, se non  sono loggato vado alla home altrimenti resto qua
require "connessione.php";

if(isset($_REQUEST["ido"])){
	$ido=$_REQUEST["ido"]; 
    trim ($ido);
}else{
	header("location:index.php");
}

if(isset($_REQUEST["PAGE"])){
	$PAGE=$_REQUEST["PAGE"]; 
    trim ($PAGE);
}

$comm = trim($_POST['Comm']);
trim($comm);

$toinsert = "UPDATE Commento SET Testo = '".$comm."'
			WHERE Id_commento = '".$ido."' ";
			$ris = $conn->query($toinsert);

if($ris){//se ho fatto inserimento del commento
	header("Location: ".$_SERVER['HTTP_REFERER']);
}else{//andato male inserimento del commento
	header("Location: ".$_SERVER['HTTP_REFERER']);
}
?>