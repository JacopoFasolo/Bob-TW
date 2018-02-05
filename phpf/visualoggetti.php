<?php
	require "connessione.php";

	if(isset($_REQUEST["nometab"])){
        $ntab=$_REQUEST["nometab"]; 
        trim ($ntab);
    }else{
    	header("location:../index.php");
    }

?>
<div id="tabsci">

	<table>
  		<th> <?php echo $ntab; ?> </th>
  		<tr>
    	<td>Marca</td>
    	<td>Modello</td>
    	<td>Prezzo</td>
    	<td>Id</td>    
  		</tr>
 			<?php
 				$sql = "SELECT Id_s, Prezzo, Marca, Modello FROM `{$ntab}` ORDER BY marca ";
 				$result = $conn->query($sql);
 				foreach ($result as $asd) {
 					echo '<tr>';
					echo '<td>'; print $asd["Marca"]; echo '</td>';
					echo '<td>'; print $asd["Modello"]; echo '</td>';
					echo '<td>'; print $asd["Prezzo"]; echo '</td>' ;
					echo '<td>'; echo '<a href="vissci.php?ido='.$asd["Id_s"].'&nometab='.$ntab.'">'.$asd["Id_s"].'</a>';
					echo '</tr>';
 				}
 				//`" . $mysql_tb . "`  `{$ntab}`
?>
	</table>
</div>

