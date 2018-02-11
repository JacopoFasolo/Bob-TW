<!-- Prova caricamento pagina princale -->
<?php
    $titolo = "Bob - Noleggio";

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
    
    #includo header della pagina
    //echo file_get_contents("page/header.html");
    include ("php/header.php");

    echo '<div id="breadcrumb">';
    include ("php/breadcrumb.php");
    echo '</div>';

    echo '<div id="page">';
    include ("php/menu.php");
    
    #includo il menu e middle della pagina
    //echo file_get_contents("html/noleggio_attrezzatura.html");
    include ("html/noleggio_attrezzatura.html");
    echo '</div>';

    #includo il footer
    echo file_get_contents("page/footer.html");
    
    #chiudo tags aperti prima
    echo "</body></html>";
?>