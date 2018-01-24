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
$reg_d = trim($_POST['reg_d']);
$reg_m = trim($_POST['reg_m']);
$reg_y = trim($_POST['reg_y']);
$controlloq = 0;

//controllo data di nascita
if(($reg_y > 1900 && $reg_y < 2000) && ($reg_d >= 1 && $reg_d <= 31) && ($reg_m >= 1 && $reg_m <= 12)){
	$controlloq=1;
	if( ($reg_m == 4) || ($reg_m == 6) || ($reg_m == 9) || ($reg_m == 11)  ){
		if(($reg_d >= 1 && $reg_d <= 30)){
			$controlloq = 1;
		}else{
			$controlloq = 0;
		}
	}
	if( ($reg_m == 2) ){
		if(($reg_d >= 1 && $reg_d <= 28)){
			$controlloq = 1;
		}else{
			if($reg_d == 29){
				if($reg_y % 4 == 0){
					if($reg_y % 100 == 0){
						if($reg_y % 400 == 0){//anno bisestile
							$controlloq = 1;
						}else{//non bise
							$controlloq = 0;
						}
					}else{//bisestile
						$controlloq = 1;
					}
				}else{//non è bise
					$controlloq = 0;
				}
			}else{
				$controlloq = 0;
			}		
		}
	}
}

$controlloutente = "select * from utente where Username='".$reg_username."'";
$rescontrolloutente = mysqli_query($conn,$controlloutente);
$contautente = mysqli_num_rows($rescontrolloutente);

$controllomail = "select * from utente where Email='".$reg_email."'";
$rescontrollomail = mysqli_query($conn,$controllomail);
$contamail = mysqli_num_rows($rescontrollomail);

//inserting data
if(($controlloq == 1) && ($contamail == 0) && ($contautente == 0) ){
	$toinsert = "INSERT INTO utente
		(Username, Email, Password, Nome, Cognome, Sesso, Data_Nascita)
		VALUES
		('".$reg_username."','".$reg_email."','".$reg_password."','".$reg_name."','".$reg_surname."','".$gender."','".$reg_y."''".$reg_m."''".$reg_d."')";

	$result = $conn->query($toinsert);//eseguo la query
	if($result){//se ho un risultato true ho eseguito la query quindi tutto ok
		header("location:../login.php");
	} else{//se ho false qualcosa è andato storto return alla pagina con errore
		header("location:../login.php?err=1");
	}
}else{//dati da inserire sbaglaiti
	echo "$controlloq"."$contamail"."$contautente";
	if($controlloq == 0){
		header("location:../login.php?err=2");
	}
	if($contamail == 1){
		header("location:../login.php?err=3");
	}
	if($contautente == 1){
		header("location:../login.php?err=4");
	}
}
?>