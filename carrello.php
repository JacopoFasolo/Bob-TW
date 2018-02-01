<?php
    $titolo = "Bob - Carrello";

    #importo il doctype e l'head della pagina
    echo file_get_contents("Pezzi_di_pagina/doctype(modificare).html");
    
	#inizio del tag body della pagina
    echo "<body>";

    #controllo se utente loggato cosi da far vedere la triscia superiore di login o la striscia superiore ciao utente se già loggato
    session_start();
    if(!isset($_SESSION["login"]))
        include ("phppage/visualloginalto.php");
    	//echo file_get_contents("Pezzi_di_pagina/login.html");
    else
        include ("phppage/loggedin.php");
    
    #includo header della pagina
    include ("phppage/header.php");
    
    #includo il menu e middle della pagina
    echo file_get_contents("html/carrello.html");

    #includo il footer
    echo file_get_contents("Pezzi_di_pagina/footer.html");
    
    #chiudo tags aperti prima
    echo "</body></html>";
?>