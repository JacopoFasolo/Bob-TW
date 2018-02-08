<!-- Prova caricamento pagina princale -->
<?php
    $titolo = "Bob - Biglietti e prezzi";

    #importo il doctype e l'head della pagina
    //echo file_get_contents("page/doctype(modificare).html");
    include ("page/doctype.php");
    
	#inizio del tag body della pagina
    echo "<body>";

    #controllo se utente loggato cosi da far vedere la triscia superiore di login o la striscia superiore ciao utente se già loggato
    session_start();
    if(!isset($_SESSION["login"]))
        include ("php/visualloginalto.php");
    	//echo file_get_contents("page/login.html");
    else
        include ("php/loggedin.php");
    
    #includo header della pagina
    //echo file_get_contents("page/header.html");
    include ("php/header.php");

    echo '<div id="breadcrumb">';
    include ("php/breadcrumb.php");
    echo '</div>';

    echo '<div id="page">';
    include ("php/menu.php");
    
    #includo il menu e middle della pagina
    //echo file_get_contents("html/biglietti_prezzi.html");
    include ("html/biglietti_prezzi.html");

    #includo il footer
    echo file_get_contents("page/footer.html");
    
    #chiudo tags aperti prima
    echo "</body></html>";
?>