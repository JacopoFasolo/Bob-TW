<!-- Prova caricamento pagina princale -->
<?php
    session_start();
    if(isset($_SESSION["login"]))
    header("location:index.php");

    $titolo = "Bob - Login";
    
    #importo il doctype e l'head della pagina
    //echo file_get_contents("Pezzi_di_pagina/doctype(modificare).html");
    include ("Pezzi_di_pagina/doctype.php");
    
	#inizio del tag body della pagina
    echo "<body>";
    
    #includo header della pagina
    echo file_get_contents("Pezzi_di_pagina/header.html");

    echo '<div id="page">';
    include ("phppage/menu.php");

    #includo il menu e middle della pagina
    include ("html/login.html");
    //echo file_get_contents("html/login.html");

    #includo il footer
    echo file_get_contents("Pezzi_di_pagina/footer.html");
    
    #chiudo tags aperti prima
    echo "</body></html>";
?>

