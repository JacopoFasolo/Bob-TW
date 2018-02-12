<?php 
	/*
	  Connessione al DBMS e selezione del database.
	*/
	# blocco dei parametri di connessione
	// nome di host
	$host = "localhost";
	// username dell'utente in connessione
	$user = "root";
	// password dell'utente
	$password = "";
	// nome del database
	$db = "bob";
	# stringa di connessione al DBMS
	// istanza dell'oggetto della classe MySQLi
	$conn = new mysqli($host, $user, $password, $db);
	// verifica su eventuali errori di connessione
	if ($conn->connect_errno) {
		$PAGE = $_SERVER["REQUEST_URI"];
		if($PAGE == "/Bob-TW/visoggetti.php?nometab=sci&bread=sci"){
			header("Location:erroreconnessione.php");
		}
		//header("Location:../erroreconnessione.php");
		exit();
	}
?>