<?php
	session_start(); 
	unset($_SESSION["login"]);
    unset($_SESSION["USER"]);//cancello la variabile login
    unset($_SESSION["IDUSER"]); 
    header("location:../index.html") //ritorno all pagina di login 
?>