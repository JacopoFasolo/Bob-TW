<?php
    $titolo = "Bob - Carrello";

    session_start();
    if(!isset($_SESSION["login"]))
        header("Location:index.php");

    #importo il doctype e l'head della pagina
    include ("page/doctype.php");
    
	#inizio del tag body della pagina
    echo "<body>";

    #controllo se utente loggato cosi da far vedere la triscia superiore di login o la striscia superiore ciao utente se già loggato
    if(!isset($_SESSION["login"]))
        include ("php/visualloginalto.php");
    	//echo file_get_contents("page/login.html");
    else
        include ("php/loggedin.php");
    
    #includo header della pagina
    include ("php/header.php");

    include ("php/breadcrumb.php");

    echo '<div id="page">';
    include ("php/menu.php");

    echo '<div id="middle">';
    include ("php/carrello.php");
    
    
    #includo il menu e middle della pagina
    echo file_get_contents("html/carrello.html");

    #includo il footer
    echo file_get_contents("page/footer.html");
    
    #chiudo tags aperti prima
    echo "</body></html>";
?>