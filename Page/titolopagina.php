<?php
$PAGE = $_SERVER["REQUEST_URI"];

if($PAGE == "/Bob-TW/index.php"){
	echo "Bob - Home";
}
if($PAGE == "/Bob-TW/chi_siamo.php"){
	echo "Bob - Chi siamo";
}
if($PAGE == "/Bob-TW/come_raggiungerci.php"){
	echo "Bob - Come raggiungerci";
}
if($PAGE == "/Bob-TW/impianti.php"){
	echo "Bob - Impianti";
}
if($PAGE == "/Bob-TW/biglietti_prezzi.php"){
	echo "Bob - Biglietti & Prezzi";
}
if($PAGE == "/Bob-TW/noleggio_attrezzatura.php"){
	echo "Bob - Noleggio attrezzatura";
}
if($PAGE == "/Bob-TW/galleria.php"){
	echo "Bob - Galleria";
}
if($PAGE == "/Bob-TW/carrello.php"){
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