<?php
	session_start(); 
	unset($_SESSION["login"]);
    unset($_SESSION["USER"]);//cancello la variabile login
    unset($_SESSION["IDUSER"]);
    session_destroy();
    //aggiungere session destroy
    if(isset($_REQUEST["PAGE"])) 
        $PAGEU=$_REQUEST["PAGE"]; 
        trim ($PAGEU);
        header("location:".$PAGEU);
    header("location:".$PAGEU);
    //header("location:../index.php"); //ritorno all pagina di login 
?>