<?php
$PAGE = $_SERVER["REQUEST_URI"];
?>
<div id="header">
	<?php
	if($PAGE != "/Bob-TW/index.php"){
	?>
    	<a href="index.php">
    	<img id="logo" src="img/logo.jpg" alt="Logo dell'azienda Bob"/>
    	</a>
    <?php
    }else{
    ?>
    	<a>
    	<img id="logo" src="img/logo.jpg" alt="Logo dell'azienda Bob"/>
    	</a>
    <?php
	}
    ?>
    <h1> BOB - La montagna in ogni stagione </h1>
    <p> <span xml:lang="fr">Courmayeur</span>, nel cuore della montagna </p>    
</div>