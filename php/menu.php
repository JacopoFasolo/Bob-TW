<?php $PAGE = $_SERVER["REQUEST_URI"]; //mi richiedo la pagina dove sono la salvo in page ?>
<div id="menu">
    <ul id="menu_sito">
        <?php if($PAGE == "/index.php" || $PAGE == "/"){ ?>
                <li id="pagina_corrente"><span xml:lang="en"> Home </span></li>
        <?php }else{ ?>
                <li class="punto_sito"> <a tabindex="10" href="index.php"> Home </a></li>
        <?php } 
              if($PAGE == "/chi_siamo.php"){ ?>
                <li id="pagina_corrente"><span xml:lang="en"> Chi siamo </span></li>
        <?php }else{ ?>
        <li class="punto_sito"> <a tabindex="11" href="chi_siamo.php"> Chi siamo </a></li>
        <?php } 
              if($PAGE == "/come_raggiungerci.php"){ ?>
                <li id="pagina_corrente"><span xml:lang="en"> Come raggiungerci </span></li>
        <?php }else{ ?>          
        <li class="punto_sito"> <a tabindex="12" href="come_raggiungerci.php"> Come raggiungerci</a></li>
        <?php } 
              if($PAGE == "/impianti.php"){ ?>
                <li id="pagina_corrente"><span xml:lang="en"> Impianti </span></li>
        <?php }else{ ?>        
        <li class="punto_sito"> <a tabindex="13" href="impianti.php"> Impianti </a> </li>
        <?php } 
              if($PAGE == "/biglietti_prezzi.php"){ ?>
                <li id="pagina_corrente"><span xml:lang="en"> Biglietti &amp; prezzi </span></li>
        <?php }else{ ?>
        <li class="punto_sito"> <a tabindex="14" href="biglietti_prezzi.php"> Biglietti &amp; prezzi</a></li>
        <?php } 
              if($PAGE == "/noleggio_attrezzatura.php"){ ?>
                <li id="pagina_corrente"><span xml:lang="en"> Noleggio attrezzature </span></li>
        <?php }else{ ?>
        <li class="punto_sito"> <a tabindex="15" href="noleggio_attrezzatura.php"> Noleggio attrezzature </a></li>
        <?php } 
              if($PAGE == "/galleria.php"){ ?>
                <li id="pagina_corrente"><span xml:lang="en"> Galleria </span></li>
        <?php }else{ ?>
        <li class="punto_sito"> <a tabindex="16" href="galleria.php"> Galleria </a></li>
        <?php } ?>            
    </ul>    
</div>