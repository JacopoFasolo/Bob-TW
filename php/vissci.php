<?php
	require "connessione.php";

	if(isset($_REQUEST["ido"])){
        $ido=$_REQUEST["ido"]; 
        trim ($ido);
    }else{
    	header("location:index.php");
    }
    if(isset($_REQUEST["nometab"])){
        $ntab=$_REQUEST["nometab"]; 
        trim ($ntab);
    }else{
    	header("location:index.php");
    }

    //query per dare titolo alla tabella
	$sql = "SELECT Marca, Modello, Prezzo, Descrizione, Url_immagine FROM `{$ntab}` WHERE Id_s = '".$ido."'";
 	$result = $conn->query($sql);
 	$tit = mysqli_fetch_array($result);

 	//query per selezionare il testo del commento id di chi lo fa id dell'oggetto e id del commento
 	$sql = "SELECT * FROM Commento JOIN Commento_ins
 			WHERE '".$ido."' = Id_ogg AND Id_commento = Id_com";
 	$res = $conn->query($sql);
 	$count = mysqli_num_rows($res);

 	//se esiste la sessione di login prendo id utente altrimenti faccio la query con null
 	if(isset($_SESSION["login"])){
 		$id_utente = $_SESSION["IDUSER"];
 	}else{
 		$id_utente = null;
 	}

 	//query per vedere se l'utente loggato ha già fatto un commento
 	$sql = "SELECT * FROM Commento_ins JOIN Commento
 	WHERE '".$ido."' = Id_ogg AND Id_ut = '".$id_utente."' AND Id_commento = Id_com";
 	$risquerycercacommento = $conn->query($sql);
 	$contacommentoutente = mysqli_num_rows($risquerycercacommento);
 	$arraydaticommento = mysqli_fetch_array($risquerycercacommento);
?>
<div class="prodottonoleggio">
	<img src="<?php echo $tit["Url_immagine"]; ?>"/>
    <h1> <?php print $tit["Marca"]; echo " "; print $tit["Modello"]; ?> </h1>
    <p><?php echo $tit["Descrizione"]; ?></p>
    <p class ="prezzoprodotto">&euro; <?php print $tit["Prezzo"]; ?> </p>
    <br/>
    <?php
    if($count > 0){//ho almeno un commento
		foreach ($res as $com) {
			if($com["Id_ut"] != $id_utente){//se il commento non è del mio utente lo stampo
				print $com["Testo"];
					echo '<br/>';
				}
			}
	}else{//non ho nessun commento
		echo '<p>'; print "Nessun commento per questo prodotto"; echo '</p>';//echo '</td>' ;
		echo '<br/>';
	}
	if(isset($_SESSION["login"])){//c'è qualcuno loggato
    	if($contacommentoutente > 0){//se l'utente loggato ha fatto un commento lo stampo nel form poi modificabile
    		echo '<form method="post" action="php/updatecommento.php?ido='.$arraydaticommento["Id_commento"].'">';
    		echo '<input type="text" name="Comm" value="'; echo $arraydaticommento["Testo"]; echo ' " size="150">';
			echo '<br/>';
			echo '<input type="submit" name="submit" value="Modifica">';//qua fare update e non inserire
			if(isset($_SESSION["inscom"])){
				$inscom=$_SESSION["inscom"];
				unset($_SESSION["inscom"]);
				echo '<br/>';
				if($inscom=="ok")
					echo 'Inserimento avvenuto';
				if($inscom=="okk")
					echo 'Modifica avvenuta';
			}
    	}else{//l'utente non ha fatto aclucn commento
			echo '<form method="post" action="php/inseriscicommento.php?ido='.$ido.'">';
			echo '<input type="text" name="Comm" placeholder="Inserisci il tuo commento" size="150">';
			echo '<br/>';
			echo '<input type="submit" name="submit" value="Inserisci commento">';
		}
	}else{//non c'è nessuno loggato
		echo '<input type="text" name="percommentare" readonly value="Devi efettuare il login per inserire un commento" size="150">';
	}
    ?>
</div>