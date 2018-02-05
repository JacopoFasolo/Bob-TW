<div id="login_link">
	<?php
	$PAGE = $_SERVER["REQUEST_URI"];
	echo '<a href="login.php?PAGE='.$PAGE.'" tabindex="2">Registrati</a>';
	echo '<a href="login.php?PAGE='.$PAGE.'" tabindex="1">Login</a>';
	?>
</div>