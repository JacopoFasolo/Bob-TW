<?php
	session_start(); 
	unset($_SESSION["login"]);
    unset($_SESSION["USER"]);//cancello la variabile login
    unset($_SESSION["IDUSER"]);
    session_destroy();
    //aggiungere session destroy
    header("location:../index.php");
    //header("location:../index.php"); //ritorno all pagina di login 
?>