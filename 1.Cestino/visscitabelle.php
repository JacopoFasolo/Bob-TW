<?php

/*<div id="tabelladinamica">
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
							if($com["Id_ut"] != $id_utente){//se il commento non è del mio utente lo stampo
								print $com["Testo"];
								echo '<br/>';
							}
						}
						//echo '</td>';
					}else{//non ho nessun commento
						echo '<td>'; print "Nessun commento per questo prodotto"; //echo '</td>' ;
						echo '<br/>';
					}
    				if(isset($_SESSION["login"])){//c'è qualcuno loggato
    					if($contacommentoutente > 0){//se l'utente loggato ha fatto un commento lo stampo nel form poi modificabile
    						echo '<form method="post" action="php/updatecommento.php?ido='.$arraydaticommento["Id_commento"].'">';
    						echo '<input type="text" name="Comm" value="'; echo $arraydaticommento["Testo"]; echo ' " size="150">';
							echo '<br/>';
							echo '<input type="submit" name="submit" value="Modifica">';//qua fare update e non inserire
    					}else{//l'utente non ha fatto aclucn commento
							echo '<form method="post" action="php/inseriscicommento.php?ido='.$ido.'">';
							echo '<input type="text" name="Comm" placeholder="Inserisci il tuo commento" size="150">';
							echo '<br/>';
							echo '<input type="submit" name="submit" value="Inserisci commento">';
						}
					}else{//non c'è nessuno loggato
						echo '<input type="text" name="percommentare" readonly value="Devi efettuare il login per inserire un commento" size="150">';
					}
					echo '</td>';
					echo '</tr>';
			?>
	</table>
</div>*/

?>