<?php
if(isset($_SESSION["login"])){
    $id_utente = $_SESSION["IDUSER"];
}

function usaCarrello()
{
  $carrello = $_SESSION['carrello'];
  if (!$carrello)
  {
    return 'Carrello  vuoto.<br>';
  }else{
    $nometab = @explode(',',$carrello);
    return 'Ci sono <a href="carrello.php">'.
    @count($nometab). ' prodotti nel carrello.</a><br>';
  }
}

function mostraCarrello()
{
	
  global $db;
  $carrello = $_SESSION['carrello'];
  $somma = 0;
  if ($carrello)
  {
    $nometab = @explode(',',$carrello);
    $acquisti = array();
    foreach ($nometab as $prodotto)
    {
      $acquisti[$prodotto] = (@isset($acquisti[$prodotto])) ? $acquisti[$prodotto] + 1 : 1;
    }
    $result[] = '<form action="carrello.php?action=aggiorna" method="post" Id_s="cart">';
    $result[] = '<table>';

    foreach ($acquisti as $Id_s=>$quantita)
    {
        $nometb = 'carrello';
        $sql = "SELECT * FROM $nometb WHERE Id_utente = $id_utente";
        $res = $db->query($sql);
        if ($res && $res->num_rows > 0)
        {
            $f = $res->fetch_assoc();
            $result[] = '<tr>';
            $result[] = '<td><a href="carrello.php?action=cancella&Id_s='.$Id_s.'">Cancella</a></td>';
            $result[] = '<td>'.$f['Modello'].' by '.$f['Marca'].'</td>';
            $result[] = '<td>&euro;'.$f['Prezzo'].'</td>';
            $result[] = '<td><input type="text" name="quantita'.$Id_s.'" value="'.$quantita.'" size="3"></td>';
            $result[] = '<td>&euro;'.($f['Prezzo'] * $quantita).'</td>';
            $somma += $f['Prezzo'] * $quantita;
            $result[] = '</tr>';
        }
    }

    $result[] = '</table>';
    $result[] = 'Totale: <b>&euro;'.$somma.'</b></br>';
    $result[] = '<button type="submit">Aggiorna il carrello</button>';
    $result[] = '</form>';
  }else{
    $result[] = 'Il carrello è vuoto.<br>';
  }
  return @join('',$result);
}
?>