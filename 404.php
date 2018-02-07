<!-- Prova caricamento pagina princale -->
<?php
    $titolo = "Bob - Errore";

    #importo il doctype e l'head della pagina
    //echo file_get_contents("Pezzi_di_pagina/doctype(modificare).html");
    include ("Pezzi_di_pagina/doctype.php");
    
	#inizio del tag body della pagina
    echo "<body>";
    
    #includo header della pagina
    //echo file_get_contents("Pezzi_di_pagina/header.html");
    include ("phppage/header.php");

    echo '<div id="page">';
    include ("phppage/menu.php");
    
    #includo il menu e middle della pagina
    //echo file_get_contents("html/biglietti_prezzi.html");
    include ("html/404.html");

    echo '</div>';

    #includo il footer
    echo file_get_contents("Pezzi_di_pagina/footer.html");
    
    #chiudo tags aperti prima
    echo "</body></html>";
?>