<form id="form_registrazione" method="post" action="php/inserisciutente.php">
	<h1>Registrati</h1>
	<label for="Username">Username:</label>
	<?php
		echo '<input type="text" name="reg_username" value="'; echo $_SESSION["regusername"]; echo '" tabindex="23"/><br/>';
		echo '<label for="Password">Password:</label>';
		echo '<input type="password" name="reg_password" placeholder="Password" tabindex="24"/><br/>';
		echo '<label for="Nome">Nome:</label>';
		echo '<input type="text" name="reg_name" value="'; echo $_SESSION["regname"]; echo '" tabindex="25"/><br/>';
		echo '<label for="Cognome">Cognome:</label>';
		echo '<input type="text" name="reg_surname" value="'; echo $_SESSION["regsurname"]; echo '" tabindex="26"/><br/>';
		echo '<label for="Email"><span xml:lang="en">Email</span>:</label>';
		echo '<input type="email" name="reg_email" value="'; echo $_SESSION["regemail"]; echo '" required="required" tabindex="27"/> <br/>';
		echo '<label for="Sesso M">Sesso: </label>';
		echo '<div id="sesso_form">';
		echo 'M<input type="radio" name="gender" value="M" checked="checked" tabindex="28"/>';
		echo 'F<input type="radio" name="gender" value="F" tabindex="29"/><br/>';
		echo '</div>';
		echo '<label for="Data di nascita">Data di nascita:</label>';
		echo '<div id="datanascita">';
		echo '<input type="text" name="reg_d" value="'; echo $_SESSION["regd"]; echo '" tabindex="30"/>/';
		echo '<input type="text" name="reg_m" value="'; echo $_SESSION["regm"]; echo '" tabindex="31"/>/';
		echo '<input type="text" name="reg_y" value="'; echo $_SESSION["regy"]; echo '" tabindex="32"/>';
		echo '</div>';
		//include ("errorloginpage.php");
		unset($_SESSION["errorereg"]);
		unset($_SESSION["regusername"]);
		unset($_SESSION["regname"]);
		unset($_SESSION["regsurname"]);
		unset($_SESSION["regemail"]);
		unset($_SESSION["regd"]);
		unset($_SESSION["regm"]);
		unset($_SESSION["regy"]);
	?>
	<input class="button" type="submit" value="Registrati" tabindex="33"/>
	<br/>
	<?php
		include ("errorloginpage.php");
	?>
</form>