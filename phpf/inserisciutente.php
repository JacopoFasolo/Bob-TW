<?php
session_start();
require "connessione.php";
// recupero i valori e li assegno alle variabili $
//print_r($_POST);
$reg_username = trim($_POST['reg_username']);
$reg_password = trim($_POST['reg_password']);
$reg_name = trim($_POST['reg_name']);
$reg_surname = trim($_POST['reg_surname']);
$reg_email = trim($_POST['reg_email']);
$gender = trim($_POST['gender']);
$reg_birth = trim($_POST['reg_birth']);

//inserting data order
$toinsert = "INSERT INTO utente
			(Username, Email, Password, Nome, Cognome, Sesso, Data_Nascita)
			VALUES
			('".$reg_username."','".$reg_email."','".$reg_password."','".$reg_name."','".$reg_surname."','".$gender."','".$reg_birth."')";

//declare in the order variable
$result = $conn->query($toinsert);	//order executes
if($result){
	header("location:../login.php");
	//echo("<br>Inserimento avvenuto correttamente");
} else{
	echo("Inserimento non eseguito");
	header("location:../login.php?err=1");
}
?>