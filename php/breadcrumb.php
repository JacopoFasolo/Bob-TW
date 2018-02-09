<?php

echo '<div id="burgermenu">
  <div class="stick" id="stick1"></div>
  <div class="stick" id="stick2"></div>
  <div class="stick" id="stick3"></div>
</div>';

echo '<div id="breadcrumb">';
$PAGE = $_SERVER["REQUEST_URI"];

if($PAGE == "/Bob-TW/index.php" || $PAGE == "/Bob-TW/"){
	echo "<p> Ti trovi in: Home </p>";
}
if($PAGE == "/Bob-TW/chi_siamo.php"){
	echo '<p> Ti trovi in: <a href="index.php" tabindex="5">Home</a> &gt;&gt; chi siamo</p>';
}
if($PAGE == "/Bob-TW/come_raggiungerci.php"){
	echo '<p> Ti trovi in: <a href="index.php" tabindex="5">Home</a> &gt;&gt; come raggiungerci </p>';
}
if($PAGE == "/Bob-TW/impianti.php"){
	echo '<p> Ti trovi in: <a href="index.php" tabindex="5"> Home</a> &gt;&gt; impianti</p>';
}
if($PAGE == "/Bob-TW/biglietti_prezzi.php"){
	echo '<p> Ti trovi in: <a href="index.php" tabindex="5"> Home</a> &gt;&gt; biglietti &amp; prezzi</p>';
}
if($PAGE == "/Bob-TW/noleggio_attrezzatura.php"){
	echo '<p> Ti trovi in: <a href="index.php" tabindex="5">Home</a> &gt;&gt; noleggio attrezzature</p>';
}
if($PAGE == "/Bob-TW/galleria.php"){
	echo '<p> Ti trovi in: <a href="index.php" tabindex="5">Home</a> &gt;&gt; galleria</p>';
}
if($PAGE == "/Bob-TW/carrello.php"){
	echo '<p> Ti trovi in: <a href="index.php" tabindex="5">Home</a> &gt;&gt; carrello</p>';
}

if(isset($_REQUEST["bread"])){
	$bread=$_REQUEST["bread"];
	if($bread == "sci"){
		echo '<p> Ti trovi in: <a href="index.php" tabindex="5">Home</a> &gt;&gt; <a href="noleggio_attrezzatura.php" tabindex="5">noleggio attrezzature</a> &gt;&gt; sci</p>';
	}
	if($bread == "scarponi"){
		echo '<p> Ti trovi in: <a href="index.php" tabindex="5">Home</a> &gt;&gt; <a href="noleggio_attrezzatura.php" tabindex="5">noleggio attrezzature</a> &gt;&gt; scarponi</p>';
	}
	if($bread == "caschi"){
		echo '<p> Ti trovi in: <a href="index.php" tabindex="5">Home</a> &gt;&gt; <a href="noleggio_attrezzatura.php" tabindex="5">noleggio attrezzature</a> &gt;&gt; caschi</p>';
	}
	if($bread == "ciaspole"){
		echo '<p> Ti trovi in: <a href="index.php" tabindex="5">Home</a> &gt;&gt; <a href="noleggio_attrezzatura.php" tabindex="5">noleggio attrezzature</a> &gt;&gt; ciaspole</p>';
	}
}
if(isset($_REQUEST["brpro"])){
	$brpro=$_REQUEST["brpro"];
	$urlbread=$_SESSION["urlbread"];
	$ntabbre=$_SESSION["nometabbre"];
	if($brpro == "prodotto"){
		echo '<p> Ti trovi in: <a href="index.php" tabindex="5">Home</a> &gt;&gt; <a href="noleggio_attrezzatura.php" tabindex="5">noleggio attrezzature</a> &gt;&gt; <a href="'.$urlbread.'" tabindex="5">'.$ntabbre.'</a> &gt;&gt; prodotto</p>';
	}
}
echo '</div>'; 
?>