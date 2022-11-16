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
  public function tambahproduk($data){
    $this -> db -> query("INSERT INTO {$this->tabel} (category_id,product_name,product_price,product_description,product_image,product_status) VALUES (:kategori,:nama,:harga,:deskripsi,:gambar,:status)");
    $this -> db -> bind('nama',$data['nama']);
    $this -> db -> bind('kategori',$data['kategori']);
    $this -> db -> bind('harga',$data['harga']);
    $this -> db -> bind('deskripsi',$data['deskripsi']);
    $this -> db -> bind('gambar',$data['gambar']);
    $this -> db -> bind('status',$data['status']);
    return $this -> db -> rowCount();
  }
}