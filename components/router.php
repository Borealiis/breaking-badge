<?php
  include_once('functions.php');

  $routes = [];
  $routes['dashboard'] = 'Dashboard';
  $routes['badges'] = 'All badges';
  $routes['students'] = 'All students';

  $requestedPage = $_GET['p'];

  if(!isAuthenticated()){
    // include the login page
  }
  if(array_key_exists($requestedPage, $routes)){
    include_once('navbar.php');

    // include the page
  }
  echo $requestedPage;
?>