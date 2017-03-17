<?php
  date_default_timezone_set('America/Los_Angeles');
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/Contact.php";
  r

  session_start();
  if(empty($_SESSION['list_of_contacts'])){
    $_SESSION['list_of_contacts'] = array();
  }

  return $app;
?>
