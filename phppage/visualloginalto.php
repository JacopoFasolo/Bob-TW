<div id="login_link">
	<?php
	$PAGE = $_SERVER["REQUEST_URI"];
	echo '<a href="login.php?PAGE='.$PAGE.'">Registrati</a>';
	echo '<a href="login.php?PAGE='.$PAGE.'">Login</a>';
	?>
</div>