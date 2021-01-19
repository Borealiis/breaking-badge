<?php
  $DB_HOST = 'localhost';
  $DB_NAME = 'breaking_badge';
  $DB_USER = 'root';
  $DB_PASSWORD = '';

  function createCursor(){
      return new PDO("
        mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8", $DB_USER, $DB_PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
  }
?>