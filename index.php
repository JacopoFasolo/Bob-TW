<!-- Prova caricamento pagina princale -->
<?php
    $pag= 'pag';
    echo file_get_contents("../Pezzi_di_Pagina/header_login.html");
    echo file_get_contents("./html/index.html");
?>