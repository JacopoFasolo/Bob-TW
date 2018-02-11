<div id="middle">
<?php
	require "connessione.php"; 

	if(isset($_REQUEST["nometab"])){
        $ntab=$_REQUEST["nometab"]; 
        trim ($ntab);
    }else{
    	header("location:index.php");
    }
    $_SESSION["nometabbre"]="$ntab";
?>
<?php
        $sql = "SELECT Id_s, Prezzo, Marca, Modello, Url_immagine, Descrizione FROM `{$ntab}` ORDER BY Marca ";
        $result = $conn->query($sql);
        foreach ($result as $asd) {
?>
        <div class="prodottonoleggio">
            <img src="<?php echo $asd["Url_immagine"]; ?>"/>
            <h1> <?php print $asd["Marca"]; echo " "; print $asd["Modello"]; ?> </h1>
            <p><?php print $asd["Descrizione"];?></p>
            <p class ="prezzoprodotto">&euro; <?php print $asd["Prezzo"]; ?></p>
            <?php echo '<a href="visoggetto.php?ido='.$asd["Id_s"].'&nometab='.$ntab.'&brpro=prodotto">Visualizza</a>'; ?>
        </div>
    <?php
        }
    ?>
<a href="#" id=torna_su>Torna su</a>
</div>

