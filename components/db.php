<?php

  function createCursor(){
    $DB_HOST = 'localhost';
    $DB_NAME = 'breaking_badge';
    $DB_USER = 'user';
    $DB_PASSWORD = 'P@ssW0rd';
      return new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8",$DB_USER,$DB_PASSWORD,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
      );
  }
?>