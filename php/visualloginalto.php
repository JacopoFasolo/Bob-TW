<div id="login_link">
	<?php
	$PAGE = $_SERVER["REQUEST_URI"];
	
	$_SESSION["page"]=$PAGE;

	echo '<a href="login.php?Titolo=log" tabindex="2">Registrati</a>';
	echo '<a href="login.php?Titolo=log" tabindex="1">Login</a>';
	?>
</div>