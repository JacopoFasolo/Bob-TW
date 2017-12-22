<?php
	session_start();
	if(!isset($_SESSION["login"])){
	}else{
		echo $_SESSION["USER"];
	}
   
?>