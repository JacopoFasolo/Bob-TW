<?php
$PAGE = $_SERVER["REQUEST_URI"];
?>
<div id="header">
	<?php
	if($PAGE != "/index.php" && $PAGE != "/"){
	?>
    	<a href="index.php" tabindex="4">
    	<img id="logo" src="img/logo.jpg" alt="Logo dell'azienda Bob"/>
    	</a>
    <?php
    }else{
    ?>
    	<img id="logo" src="img/logo.jpg" alt="Logo dell'azienda Bob"/>
    <?php
	}
    ?>
    <h1> BOB - La montagna in ogni stagione </h1>
    <p> <span xml:lang="fr">Courmayeur</span>, nel cuore della montagna </p>    
</div>