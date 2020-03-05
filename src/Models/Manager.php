<?php

namespace BugApp\Models;

require_once ('params.php');
class Manager{
  function __construct() {
  }

  function connexionBdd(){
    try
    {
      $PDO_options[\PDO::ATTR_ERRMODE] = \PDO::ERRMODE_EXCEPTION;
      $bdd = new \PDO('mysql:host='.HOST.';dbname='.TABLENAME.';charset=utf8', LOGIN, PASSWORD, $PDO_options);
    //  echo 'co etablie';
    }
    catch (Exception $e)
    {
      die('Erreur : ' . $e->getMessage());
    }
    return $bdd;
  }
}

?>