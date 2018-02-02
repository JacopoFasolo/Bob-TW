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
 	//$comm = mysqli_fetch_array($res);
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
							print $com["Testo"]; echo '<br/>';
						}
						echo '</td>';
					}else{
						echo '<td>'; print "Nessun commento per questo prodotto"; echo '</td>' ;
					}
					echo '</tr>';
			?>
	</table>
</div>