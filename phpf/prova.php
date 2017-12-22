<?php
	session_start();
	if(!isset($_SESSION["login"])){ // non loggato

	}else{ //loggato

		echo $_SESSION["USER"];
		echo " ";
		echo $_SESSION["IDUSER"];
		
	}
   
?>