<?php

class Produk_model extends Controller {
  private $tabel = 'tb_product';
  private $db;
  public function __construct(){
    $this -> db = new Database;
  }
  public function getProduk(){
    $this -> db ->query("SELECT * FROM {$this->tabel}");
    return $this -> db -> resultSet();
  }
}