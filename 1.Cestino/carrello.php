<?php

@require('connessione.php');
@require('mysql.php');
@require('config.php');
@require('funzioni.php');

@session_start();
if(isset($_SESSION["login"])){
    $id_utente = $_SESSION["IDUSER"];
}

$carrello = $_SESSION['carrello'];
if(@isset($_GET['action']))
{
  $action = $_GET['action'];
  
  switch ($action)
  {
    case 'aggiungi':
    if ($carrello)
        
    {
      $carrello .= ','.$_GET['Id_s'];
        $toinsert = "INSERT INTO carrello
		(Id_utente,Id_oggetto)
		VALUES
		('".$id_utente."','".$carrello."')";

	$result = $conn->query($toinsert);//eseguo la query
        
    }else{
      $carrello = $_GET['Id_s'];
           $toinsert = "INSERT INTO carrello
		(Id_utente,Id_oggetto)
		VALUES
		('".$id_utente."','".$carrello."')";

	$result = $conn->query($toinsert);//eseguo la query
    }
    break;

    case 'cancella':
    if ($carrello)
    {
      $nometab = @explode(',',$carrello);
      $acquisto = '';
      foreach ($nometab as $prodotto)
      {
        if ($_GET['Id_s'] != $prodotto)
        {
          if ($acquisto != '')
          {
            $acquisto .= ','.$prodotto;
          }else{
            $acquisto = $prodotto;
          }
        }
      }
      $carrello = $acquisto;
    }
    break;

    case 'aggiorna':
    if ($carrello)
    {
      $acquisto = '';
      foreach ($_POST as $key=>$value)
      {
        if (@stristr($key,'quantita'))
        {
          $Id_s = @str_replace('quantita','',$key);
          $nometab = ($acquisto != '') ? 
          @explode(',',$acquisto) : @explode(',',$carrello);
          $acquisto = '';

          foreach ($nometab as $prodotto)
          {
            if ($Id_s != $prodotto)
            {
              if ($acquisto != '')
              {
                $acquisto .= ','.$prodotto;
              }else{
                $acquisto = $prodotto;
              }
            }
          }
  
          for ($i=1;$i<=$value;$i++)
          {
            if ($acquisto != '')
            {
              $acquisto .= ','.$Id_s;
            }else{
              $acquisto = $Id_s;
            }
          }
        }
      }
    }
    $carrello = $acquisto;
    break;
  }
}

$_SESSION['carrello'] = $carrello;
?>

<html>
<h1>Carrello </h1>

<?php
echo usaCarrello();
?>

<h1>Controlla il numero dei prodotti</h1>

<?php
echo mostraCarrello();
?>

<a href="noleggio_attrezzatura.php">Torna allo shop</a><br>

</html>