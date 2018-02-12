<!-- Prova caricamento pagina princale -->
<?php
    session_start();
    if(isset($_SESSION["login"]))
    header("location:index.php");

    $titolo = "Bob - Login";
    
    #importo il doctype e l'head della pagina
    //echo file_get_contents("page/doctype(modificare).html");
    include ("page/doctype.php");
    
	#inizio del tag body della pagina
    echo "<body>";
    
    #includo header della pagina
    //echo file_get_contents("page/header.html");
    include ("php/header.php");

    include ("php/breadcrumb.php");

    echo '<div id="page">';
    include ("php/menu.php");

    #includo il menu e middle della pagina
    include ("php/loginpage.php");
    //echo file_get_contents("html/login.html");
    echo '</div>';

    #includo il footer
    echo file_get_contents("page/footer.html");
    
    #chiudo tags aperti prima
    echo "</body></html>";
?>

