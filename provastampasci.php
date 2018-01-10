<?php
	require "phpf/connessione.php";
	echo file_get_contents("Pezzi_di_pagina/header_login.html");
	echo file_get_contents("Pezzi_di_pagina/footer.html");
?>
<div id="tabsci">

	<table>
  		<th>SCI </th>
  		<tr>
    	<td>Prezzo</td>
    	<td>Marca</td>    
  		</tr>

 			<?php
 				$sql = "SELECT Prezzo, Marca FROM sci";
 				$result = $conn->query($sql);
 				foreach ($result as $asd) {
 					echo '<tr>';
					echo '<td>'; print $asd["Prezzo"]; echo '</td>' ;
					echo '<td>'; print $asd["Marca"]; echo '</td>';
					echo '</tr>';
 				}
?>
	</table>
</div>