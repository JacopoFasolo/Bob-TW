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
		if(isset($_REQUEST["vct"])){
        	$vct=$_REQUEST["vct"]; 
        	trim ($vct);
        	if($vct == "er"){
				header("Location:erroreconnessione.php");
			}
		}else{
			header("Location:../erroreconnessione.php");
		}
		exit();
	}
?>