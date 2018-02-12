<?php
	if(isset($_REQUEST["err"])){
		$var=$_REQUEST["err"];
		if($var == 2)
			echo "Inserisci una data valida";
		if($var == 3)
			echo "Mail già presente nel database";
		if($var == 4)
			echo "Username già presente nel database";
		if($var == 5)
			echo "Inserisci username e di almento tre caratteri";
		if($var == 6)
			echo "Inserisci un nome";
		if($var == 7)
			echo "Inserisci un cognome";
		if($var == 1)
			echo "Inserimento non avvenuto";
	}
?>