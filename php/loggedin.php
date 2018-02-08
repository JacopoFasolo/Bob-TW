<div id="utenteloggato">
<a>Ciao <?php echo $_SESSION["USER"]; ?> </a>
<?php
	$PAGE = $_SERVER["REQUEST_URI"];
	echo '<a href="php/logout.php?PAGE='.$PAGE.'" tabindex="2">Logout</a>';
	?>
<a href = "carrello.php" tabindex="1">Il tuo carrello</a>
</div>
