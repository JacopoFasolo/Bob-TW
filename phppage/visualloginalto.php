<div id="login_link">
	<?php
	$PAGE = $_SERVER["REQUEST_URI"];
	echo '<a href="login.php?PAGE='.$PAGE.'&Titolo=log" tabindex="2">Registrati</a>';
	echo '<a href="login.php?PAGE='.$PAGE.'&Titolo=log" tabindex="1">Login</a>';
	?>
</div>