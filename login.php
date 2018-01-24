<!-- Prova caricamento pagina princale -->
<?php
    $titolo = "Bob - Login";
    
    #importo il doctype e l'head della pagina
    echo file_get_contents("Pezzi_di_pagina/doctype(modificare).html");
    
	#inizio del tag body della pagina
    echo "<body>";
    
    #includo header della pagina
    echo file_get_contents("Pezzi_di_pagina/header.html");

    #includo il menu e middle della pagina
    echo file_get_contents("html/login.html");

    #includo il footer
    echo file_get_contents("Pezzi_di_pagina/footer.html");
    
    #chiudo tags aperti prima
    echo "</body></html>";
?>

