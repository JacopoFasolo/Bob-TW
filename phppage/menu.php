<?php $PAGE = $_SERVER["REQUEST_URI"]; //mi richiedo la pagina dove sono la salvo in page ?>
<div id="menu">
    <ul id="menu_sito">
        <?php if($PAGE == "/Bob-TW/index.php"){ ?>
                <li id="pagina_corrente"><span xml:lang="en"> Home </span></li>
        <?php }else{ ?>
                <li class="punto_sito"> <a href="index.php"> Home </a></li>
        <?php } 
              if($PAGE == "/Bob-TW/chi_siamo.php"){ ?>
                <li id="pagina_corrente"><span xml:lang="en"> Chi siamo </span></li>
        <?php }else{ ?>
        <li class="punto_sito"> <a href="chi_siamo.php"> Chi siamo </a></li>
        <?php } 
              if($PAGE == "/Bob-TW/come_raggiungerci.php"){ ?>
                <li id="pagina_corrente"><span xml:lang="en"> Come raggiungerci </span></li>
        <?php }else{ ?>          
        <li class="punto_sito"> <a href="come_raggiungerci.php"> Come raggiungerci</a></li>
        <?php } 
              if($PAGE == "/Bob-TW/impianti.php"){ ?>
                <li id="pagina_corrente"><span xml:lang="en"> Impianti </span></li>
        <?php }else{ ?>        
        <li class="punto_sito"> <a href="impianti.php"> Impianti </a> </li>
        <?php } 
              if($PAGE == "/Bob-TW/biglietti_prezzi.php"){ ?>
                <li id="pagina_corrente"><span xml:lang="en"> Biglietti &amp; prezzi </span></li>
        <?php }else{ ?>
        <li class="punto_sito"> <a href="biglietti_prezzi.php"> Biglietti &amp; prezzi</a></li>
        <?php } 
              if($PAGE == "/Bob-TW/noleggio_attrezzatura.php"){ ?>
                <li id="pagina_corrente"><span xml:lang="en"> Noleggio attrezzature </span></li>
        <?php }else{ ?>
        <li class="punto_sito"> <a href="noleggio_attrezzatura.php"> Noleggio attrezzature </a></li>
        <?php } 
              if($PAGE == "/Bob-TW/galleria.php"){ ?>
                <li id="pagina_corrente"><span xml:lang="en"> Galleria </span></li>
        <?php }else{ ?>
        <li class="punto_sito"> <a href="galleria.php"> Galleria </a></li>
        <?php } ?>            
    </ul>    
</div>