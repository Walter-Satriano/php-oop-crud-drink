<?php

  $servername = 'localhost';
  $username = 'root';
  $password = 'root';
  $dbname = 'drinkdb';

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn -> connect_error) {

    var_dump('error');
    var_dump($conn);
    die();
  }

?>
