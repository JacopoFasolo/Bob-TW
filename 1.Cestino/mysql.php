<?php
class MySQL
{
  var $host;
  var $user;
  var $password;
  var $database;
  var $connessione;
  var $errore;

  function MySQL ($host,$user,$password,$database)
  {
    $this->host=$host;
    $this->user=$user;
    $this->password=$password;
    $this->errore=$database;
    $this->connessione();
  }

  function connessione()
  {
    if (!$this->connessione = @mysql_connect($this->host, $this->user, $this->password))
    {
      trigger_error('Impossibile connettersi a MySQL.');
      $this->errore=true;
    }
    elseif (!@mysql_select_db($this->errore,$this->connessione))
    {
      trigger_error('Impossibile connettersi al database.');
      $this->errore=true;
    }
  }
 
  function notifica_errore()
  {
    if ($this->errore) return true;
    $notifica=mysql_error($this->connessione);
    if (empty($notifica)) return false;
    else return true;
  }
  
  function query($sql)
  {
    if (!$qRes=mysql_query($sql,$this->connessione))
    trigger_error (
    'Query fallita: '.mysql_error($this->connessione).
    ' SQL: '.$sql);
    return new MySQLResult($this,$qRes);
  }
}
  
class MySQLResult
{
  var $mysql;
  var $query;
  function MySQLResult(& $mysql,$query)
  {
    $this->mysql=& $mysql;
    $this->query=$query;
  }

  function fetch()
  {
    if ($f=mysql_fetch_array($this->query,MYSQL_ASSOC))
    {
      return $f;
    }
    else if ($this->size() > 0)
    {
      mysql_data_seek($this->query,0);
      return false;
    }else{
      return false;
    }
  }
  
  function size()
  {
    return mysql_num_rows($this->query);
  }
  
  function insertID()
  {
    return mysql_insert_id($this->mysql->connessione);
  }
  
  function notifica_errore()
  {
    return $this->mysql->notifica_errore();
  }
}
?>