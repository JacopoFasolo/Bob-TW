<div id="utenteloggato">
<a>Ciao <?php echo $_SESSION["USER"]; ?> </a>
<?php
	$PAGE = $_SERVER["REQUEST_URI"];
	echo '<a href="phpf/logout.php?PAGE='.$PAGE.'">Logout</a>';
	?>
<a href = "carrello.php">Il tuo carrello</a>
</div>
