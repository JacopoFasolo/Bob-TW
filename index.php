<!-- Prova caricamento pagina princale -->
<?php
    $pag= 'pag';
    echo file_get_contents("Pezzi_di_pagina/header_login.html");
    echo file_get_contents("html/index.html");
    echo file_get_contents("Pezzi_di_pagina/footer.html");
?>