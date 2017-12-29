<?php
	session_start(); // apro una nuova sessione
	require "connessione.php"; //file per la connessione al server
    $uname = $_POST["uname"];  //imposto le variabili ricevute dal form 
    $upassword = $_POST["upassword"];
    $query = "select * from utente where Username='".$uname."' and Password='".$upassword."'"; //la query per controllare se esiste l'utente nel db
    $result = mysqli_query($conn,$query); //eseguo la query
    $count = mysqli_num_rows($result); //variabile count contiene numero di righe ricevute come risultato
    $idutente = mysqli_fetch_array($result);//serve per ricavare poi il risultato della query, in questo caso serve per mantenere id dell'utente che effettua il login
    if($count>0){ //controllo se esiste un utente valido corrispondente ai valori inseriti nella form, esiste se e solo se count è maggiore di 0 
        $_SESSION["login"]="1";//crea una var session globale per vedere se c'è login
        $_SESSION["USER"]=$uname;//creo var session globale per mantenere il nome utente
        $_SESSION["IDUSER"]=$idutente['Id_utente'];//crea var session globale per mantenere Id_utente
        header("location:../index.html"); //utente valido
    } else {
        header("location:login.php?err=1");//qualcosa è andato storto, riprovare! Torno nella pagina di login.
    }
?>