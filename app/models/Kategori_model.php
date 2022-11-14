<?php

class Kategori_model{
  private $tabel = 'tb_category';
  private $db;
  public function __construct(){
    $this -> db = new Database;
  }
  public function getKategori(){
    $this -> db ->query("SELECT * FROM {$this->tabel}");
    return $this -> db -> resultSet();
  }
  public function tambahkategori($data){
    $this -> db -> query("INSERT INTO {$this->tabel} (category_name) VALUES (:nama)");
    $this -> db -> bind('nama',$data['nama']);
    return $this -> db -> rowCount();
  }
  public function getKategoriById($id){
    $this -> db ->query("SELECT * FROM {$this->tabel} WHERE category_id=:id");
    $this -> db -> bind('id',$id);
    return $this -> db -> single();
  }
  public function editkategori($data){
    $this -> db -> query("UPDATE {$this->tabel} SET category_name=:nama WHERE category_id=:id");
    $this -> db -> bind('nama',$data['nama']);
    $this -> db -> bind('id',$data['id']);
    return $this -> db -> rowCount();
  }
  public function hapuskategori($id){
    $this -> db -> query("DELETE FROM {$this->tabel} WHERE category_id=:id");
    $this -> db -> bind('id',$id);
    return $this -> db -> rowCount();
  }
}