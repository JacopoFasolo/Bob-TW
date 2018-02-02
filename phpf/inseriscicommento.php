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

// fare la query di inserimento che rimanda alla pagina di vis del prodotto..quindi mandarmi con ? andiamo qua vissci.php?ido='.$ido.';
?>