<?php

  class Bevanda {

    private $id;
    private $nome;
    private $marca;
    private $prezzo;
    private $scandenza;

    public function __construct($row) {

      $this -> setId($row["id"]);
      $this -> setNome($row["nome_bevanda"]);
      $this -> setMarca($row["marca"]);
      $this -> setPrezzo($row["prezzo"]);
      $this -> setScadenza($row["data_di_scadenza"]);
    }

    public function getId() {

      return $this -> id;
    }

    public function setId($id) {

      $this -> id = $id;
    }

    public function getNome() {

      return $this -> nome;
    }

    public function setNome($nome) {

      $this -> nome = $nome;
    }

    public function getMarca() {

      return $this -> marca;
    }

    public function setMarca($marca) {

      $this -> marca = $marca;
    }

    public function getPrezzo() {

      return $this -> prezzo;
    }

    public function setPrezzo($prezzo) {

      $this -> prezzo = $prezzo;
    }

    public function getScadenza() {

      return $this -> scadenza;
    }

    public function setScadenza($scadenza) {

      $this -> scadenza = $scadenza;
    }

    public function __toString() {

      return "ID: " . $this -> getId() . " -- "
           . "NOME: " . $this -> getNome() . " -- "
           . "MARCA: " . $this -> getMarca() . " -- "
           . "PREZZO: " . $this -> getPrezzo() . " -- "
           . "SCADENZA: " . $this -> getScadenza();
    }
  }

?>
