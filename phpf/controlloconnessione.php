<?php
	session_start(); // apro una nuova sessione
	require "connessione.php"; //file per la connessione al server
    $uname = $_POST["uname"];  //imposto la variabile uname con il valore di nome utente ricevoto dal form 
    $upassword = $_POST["upassword"]; //stesso discroso di uname
    $s = "select * from utente where Username='".$uname."' and Password='".$upassword."'"; //la query per controllare se esiste l'utente nel db
    $result = mysqli_query($conn,$s); //eseguo la query
    $count = mysqli_num_rows($result); //variabile count contiene numero di righe ricevute come risultato
    if($count>0) //controllo se esiste un utente valido corrispondente ai valori inseriti nella form, esiste se e solo se count è maggiore di 0 
    {
        $_SESSION["login"]="1";
        $_SESSION["USER"]=$uname;//se esiste creo la variabile di tipo _SESSION chiamato login 
        header("location:Home.php"); //utente valido
    else
    {
        header("location:Login.php?err=1");//qualcosa è andato storto, riptovare! Torno nella pagina di login.
    }
?>