<?php
@session_start();
if(isset($_SESSION["login"])){
    $id_utente = $_SESSION["IDUSER"];
}
@require('mysql.php');
@require('config.php');
@require('funzioni.php');


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

        
    }else{
      $carrello = $_GET['Id_s'];
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
<head>
<title>Un carrello della spesa con PHP</title>
</head>
<body>
<h1>Carrello in PHP</h1>

<?php
echo usaCarrello();
?>

<h1>Controlla il numero dei prodotti</h1>

<?php
echo mostraCarrello();
?>

<a href="noleggio_attrezzatura.html">Torna allo shop</a><br>
</body>
</html>