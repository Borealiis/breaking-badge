<?php
  $DB_HOST = '';
  $DB_NAME = '';
  $DB_USER = '';
  $DB_PASSWORD = '';

  function createCursor(){
      return new PDO("
        mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8", 
        $DB_USER, 
        $DB_PASSWORD, 
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
      );
  }
?>