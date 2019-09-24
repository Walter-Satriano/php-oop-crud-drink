<?php

  include "dbdrink-popo.php";
  include "dbdrink-query.php";
  include "dbdrink-connection.php";

  $res = $conn -> query($query_getBevande);

  $bevande = [];
  if ($res && $res -> num_rows > 0) {

    while ($row = $res -> fetch_assoc()) {

      $bevande[] = new Bevanda($row);
    }
  }

  for ($i=0; $i < sizeof($bevande); $i++) {

    $bevanda = $bevande[$i];
    echo $bevanda . "<br><br>";
  }

  echo "<br>--------- PREZZO MIN / PREZZO MAX / SOMMA PREZZI ---------<br><br>";

  $min = $bevande[0];
  $max = $bevande[0];
  $omma = 0;

  for ($i=0; $i < sizeof($bevande); $i++) {

    $bevanda = $bevande[$i];

    $prezzoBevanda = $bevanda -> getPrezzo();
    $prezzoMin = $min -> getPrezzo();
    $prezzoMax = $max -> getPrezzo();

    $somma += $prezzoBevanda;

    if ($prezzoMin > $prezzoBevanda) {

      $min = $bevanda;
    }

    if ($prezzoMax < $prezzoBevanda) {

      $max = $bevanda;
    }
  }

  echo "MIN: " . $min . "<br><br>"
     . "MAX: " . $max . "<br><br>"
     . "SUM: " . $somma;

?>
