<?php
    $titolo = "Bob - Chi siamo";

    #importo il doctype e l'head della pagina
    //echo file_get_contents("page/doctype(modificare).html");
    include ("page/doctype.php");
    
	#inizio del tag body della pagina
    echo "<body>";

    #controllo se utente loggato cosi da far vedere la triscia superiore di login o la striscia superiore ciao utente se già loggato
    session_start();
    if(!isset($_SESSION["login"]))
        include ("php/visualloginalto.php");
    else
    	include ("php/loggedin.php");

    $urlbread = $_SERVER["REQUEST_URI"];
    $_SESSION["urlbread"]="$urlbread";
    #includo header della pagina
    //echo file_get_contents("page/header.html");
    include ("php/header.php");

    include ("php/breadcrumb.php");

    echo '<div id="page">';
    include ("php/menu.php");
    
    echo '<div id="middle">'; 
    include ("php/visualoggetti.php");
    echo '</div>';

    #includo il footer
    echo file_get_contents("page/footer.html");
    
    #chiudo tags aperti prima
    echo "</body></html>"; 
?>