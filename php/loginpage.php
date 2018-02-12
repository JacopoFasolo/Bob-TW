<?php
	if(isset($_REQUEST["PAGE"])){
		$PAGEU=$_REQUEST["PAGE"]; 
		trim ($PAGEU);
	}else{
		$PAGEU="/Bob-TW/index.php";
	}
?>

<div id="middle">
	<form id="form_login" method="post" <?php echo 'action="php/controlloconnessione.php?PAGE='.$PAGEU.'"'; ?> >
		<h1>Login</h1>		
		<div>
			<label for="Username">Username:</label>
			<input type="text" name="uname" id="uname" placeholder="Username" tabindex="20"/>
			<br/>
			<label for="Password">Password:</label>
			<input type="password" name="upassword" id="upassword" placeholder="Password" tabindex="21"/>
			<br/>
			<input class="button" type="submit" value="Login" tabindex="22"/>
		</div>
		<?php
			if(isset($_REQUEST["errl"])){
				$varl=$_REQUEST["errl"];
				if($varl == 1)
					echo "Username o password non validi";
			}
		?>
	</form> 

	<?php
		if(!isset($_SESSION["errorereg"])){
	?>

	<form id="form_registrazione" method="post" action="php/inserisciutente.php">
		<h1>Registrati</h1>
		<div>
			<label for="Username">Username:</label>
			<input type="text" name="reg_username" placeholder="Username" tabindex="23"/><br/>
			<label for="Password">Password:</label>
			<input type="password" name="reg_password" placeholder="Password" tabindex="24"/><br/>
			<label for="Nome">Nome:</label>
			<input type="text" name="reg_name" placeholder="Nome" tabindex="25"/><br/>
			<label for="Cognome">Cognome:</label>
			<input type="text" name="reg_surname" placeholder="Cognome" tabindex="26"/><br/>
			<label for="Email"><span xml:lang="en">Email</span>:</label>
			<input type="email" name="reg_email" placeholder="E-mail" required="required" tabindex="27"/> <br/>
			<label for="Sesso M">Sesso: </label>
			<div id="sesso_form">
				M<input type="radio" name="gender" value="M" checked="checked" tabindex="28"/>
				F<input type="radio" name="gender" value="F" tabindex="29"/><br/>
			</div>
			<label for="Data di nascita">Data di nascita:</label>
			<div id="datanascita">
				<input type="text" name="reg_d" placeholder="DD" tabindex="30"/>/
				<input type="text" name="reg_m" placeholder="MM" tabindex="31"/>/
				<input type="text" name="reg_y" placeholder="YYYY" tabindex="32"/>
			</div>
			<input class="button" type="submit" value="Registrati" tabindex="33"/>
		</div>
		<?php
			echo '<br/>';
			if(isset($_REQUEST["ris"])){
				$var=$_REQUEST["ris"];
				if($var == 0)
					echo "Registrazione avvenuta correttamente";
			}
		?>
	</form>
	<?php
	}else{
		include ("visualoginerrore.php"); 
	}
	?>
</div>
<!-- middle -->