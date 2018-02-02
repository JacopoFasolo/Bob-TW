<?php
	require "connessione.php";
?>
<div id="tabsci">

	<table>
  		<th>SCI </th>
  		<tr>
    	<td>Marca</td>
    	<td>Modello</td>
    	<td>Prezzo</td>
    	<td>Id</td>    
  		</tr>
 			<?php
 				$sql = "SELECT Id_s, Prezzo, Marca, Modello FROM sci ORDER BY Marca";
 				$result = $conn->query($sql);
 				foreach ($result as $asd) {
 					echo '<tr>';
					echo '<td>'; print $asd["Marca"]; echo '</td>';
					echo '<td>'; print $asd["Modello"]; echo '</td>';
					echo '<td>'; print $asd["Prezzo"]; echo '</td>' ;
					echo '<td>'; echo '<a href="vissci.php?ido='.$asd["Id_s"].'">'.$asd["Id_s"].'</a>';
					echo '</tr>';
 				}
?>
	</table>
</div>