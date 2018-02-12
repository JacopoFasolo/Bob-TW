<?php
$PAGE = $_SERVER["REQUEST_URI"];

if($PAGE == "/index.php"){
	echo "Bob - Home";
}
if($PAGE == "/chi_siamo.php"){
	echo "Bob - Chi siamo";
}
if($PAGE == "/come_raggiungerci.php"){
	echo "Bob - Come raggiungerci";
}
if($PAGE == "/impianti.php"){
	echo "Bob - Impianti";
}
if($PAGE == "/biglietti_prezzi.php"){
	echo "Bob - Biglietti &amp; Prezzi";
}
if($PAGE == "/noleggio_attrezzatura.php"){
	echo "Bob - Noleggio attrezzatura";
}
if($PAGE == "/galleria.php"){
	echo "Bob - Galleria";
}
if($PAGE == "/carrello.php"){
	echo "Bob - Carrello";
}

if(isset($_REQUEST["Titolo"])){
        $TITOLO=$_REQUEST["Titolo"]; 
        trim ($TITOLO);
        if($TITOLO == "log"){
			echo "Bob - Login Registrazione";
		}
}
if(isset($_REQUEST["brpro"])){
			echo "Bob - Prodotto";
}
if(isset($_REQUEST["bread"])){
			echo "Bob - Prodotto";
}
?>