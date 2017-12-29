<?php
	session_start();
	if(!isset($_SESSION["login"])){ // non loggato
		echo file_get_contents("../Pezzi_di_pagina/header_login.html");
	}else{ //loggato
?>

<body>
    <div id="middle">
        <form id="login" action="logout.php">
            <label for="ciao">Ciao:</label>
            <?php echo $_SESSION["USER"]; ?>
            <button type="submit">Logout</button>
        </form>
    </div>
</body>
<?php ?>