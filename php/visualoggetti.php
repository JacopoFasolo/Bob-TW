<?php
	require "connessione.php";

	if(isset($_REQUEST["nometab"])){
        $ntab=$_REQUEST["nometab"]; 
        trim ($ntab);
    }else{
    	header("location:index.php");
    }

?>
<?php
        $sql = "SELECT Id_s, Prezzo, Marca, Modello FROM `{$ntab}` ORDER BY marca ";
        $result = $conn->query($sql);
        foreach ($result as $asd) {
?>
        <div class="prodottonoleggio">
          <img src="*****PERCORSO PRODOTTO*********"/>
          <h1> <?php print $asd["Marca"]; echo " "; print $asd["Modello"]; ?> </h1>
          <p>*******DESCRIZIONE PRODOTTO*********</p>
          <p class ="prezzoprodotto">&euro; <?php print $asd["Prezzo"]; ?> </p>
          <?php echo '<a href="visoggetto.php?ido='.$asd["Id_s"].'&nometab='.$ntab.'">Visualizza</a>'; ?>
          
        </div>
  <?php
        }
  ?>
</div>

