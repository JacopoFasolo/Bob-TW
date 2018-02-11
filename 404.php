<!-- Prova caricamento pagina princale -->
<?php
    $titolo = "Bob - Errore";

    #importo il doctype e l'head della pagina
    //echo file_get_contents("Pezzi_di_pagina/doctype(modificare).html");
    include ("page/doctype.php");
    
	#inizio del tag body della pagina
    echo "<body>";
    
    #includo header della pagina
    //echo file_get_contents("Pezzi_di_pagina/header.html");
    include ("php/header.php");

    echo '<div id="page">';
    include ("php/menu.php");
    
    #includo il menu e middle della pagina
    //echo file_get_contents("html/biglietti_prezzi.html");
    include ("html/404.html");

    #includo il footer
    echo file_get_contents("page/footer.html");
    
    #chiudo tags aperti prima
    echo "</body></html>";
?>