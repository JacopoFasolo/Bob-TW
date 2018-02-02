<?php
	require "connessione.php";

	if(isset($_REQUEST["ido"])){
        $ido=$_REQUEST["ido"]; 
        trim ($ido);
    }
	$sql = "SELECT Marca, Modello, Prezzo FROM sci WHERE Id_s = '".$ido."'";
 	$result = $conn->query($sql);
 	$tit = mysqli_fetch_array($result);

 	$sql = "SELECT Testo FROM Commento JOIN Commento_ins
 			WHERE '".$ido."' = Id_ogg AND Id_commento = Id_com";
 	$res = $conn->query($sql);
 	$count = mysqli_num_rows($res);
?>
<div id="sci">

	<table>
  		<th> <?php echo $tit["Marca"]; echo " "; echo $tit["Modello"]; ?> </th>
  		<tr>
    	<td>Marca</td>
    	<td>Modello</td>
    	<td>Prezzo</td>
    	<td>Commento</td>    
  		</tr>
 			<?php
 					echo '<tr>';
					echo '<td>'; print $tit["Marca"]; echo '</td>';
					echo '<td>'; print $tit["Modello"]; echo '</td>';
					echo '<td>'; print $tit["Prezzo"]; echo '</td>' ;
					if($count > 0){//ho almeno un commento
						echo '<td>';
						foreach ($res as $com) {
							print $com["Testo"];
							echo '<br/>';
						}
						//echo '</td>';
					}else{
						echo '<td>'; print "Nessun commento per questo prodotto"; //echo '</td>' ;
						echo '<br/>';
					}
					session_start();
    				if(isset($_SESSION["login"])){//c'è qualcuno loggato
						echo '<form method="post" action="inseriscicommento.php?ido='.$ido.'">';
						echo '<input type="text" name="Comm" placeholder="Inserisci il tuo commento" size="150">';
						echo '<br/>';
						echo '<input type="submit" name="submit" value="Inserisci commento">';
					}else{//non c'è nessuno loggato
						echo '<input type="text" name="percommentare" readonly value="Devi efettuare il login per inserire un commento" size="150">';
					}
					echo '</td>';
					echo '</tr>';
			?>
	</table>
</div>