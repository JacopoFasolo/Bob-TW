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
	echo '<p> Ti trovi in: <a href="index.php" tabindex="5">Home</a> &gt;&gt; Chi siamo</p>';
}
if($PAGE == "/Bob-TW/come_raggiungerci.php"){
	echo '<p> Ti trovi in: <a href="index.php" tabindex="5">Home</a> &gt;&gt; Come raggiungerci </p>';
}
if($PAGE == "/Bob-TW/impianti.php"){
	echo '<p> Ti trovi in: <a href="index.php" tabindex="5"> Home</a> &gt;&gt; Impianti</p>';
}
if($PAGE == "/Bob-TW/biglietti_prezzi.php"){
	echo '<p> Ti trovi in: <a href="index.php" tabindex="5"> Home</a> &gt;&gt; Biglietti &amp; prezzi</p>';
}
if($PAGE == "/Bob-TW/noleggio_attrezzatura.php"){
	echo '<p> Ti trovi in: <a href="index.php" tabindex="5">Home</a> &gt;&gt; Noleggio attrezzature</p>';
}
if($PAGE == "/Bob-TW/galleria.php"){
	echo '<p> Ti trovi in: <a href="index.php" tabindex="5">Home</a> &gt;&gt; Galleria</p>';
}
if($PAGE == "/Bob-TW/carrello.php"){
	echo '<p> Ti trovi in: <a href="index.php" tabindex="5">Home</a> &gt;&gt; Carrello</p>';
}
echo '</div>';
?>