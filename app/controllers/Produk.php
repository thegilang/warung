<?php
class Produk extends Controller {
  public function index(){
    $data = [];
    if(isset($_SESSION['info_login'])){
      if($_SESSION['info_login']['status_login']){
        if($this -> model('Admin_model')->getInfoById($_SESSION['info_login']['admin_id'])['status']>0){
          $data['produk'] = $this -> model('Produk_model')->getProduk();
        }else{
          header('Location: '.BASE_URL.'/login');
          exit;
        }
      }else{
        header('Location: '.BASE_URL.'/login');
        exit;
      }
    }else{
      header('Location: '.BASE_URL.'/login');
      exit;
    }
    $this -> view('paratials/home/header');
    $this -> view('layouts/produk/index',$data);
    $this -> view('paratials/home/footer');
  }
  public function tambah(){
    $data = [];
    if(isset($_SESSION['info_login'])){
      if($_SESSION['info_login']['status_login']){
        if($this -> model('Admin_model')->getInfoById($_SESSION['info_login']['admin_id'])['status']>0){
          $data['produk'] = $this -> model('Produk_model')->getProduk();
          $data['data_kategori'] = $this -> model('Kategori_model')->getKategori();
        }else{
          header('Location: '.BASE_URL.'/login');
          exit;
        }
      }else{
        header('Location: '.BASE_URL.'/login');
        exit;
      }
    }else{
      header('Location: '.BASE_URL.'/login');
      exit;
    }
    $this -> view('paratials/home/header');
    $this -> view('layouts/produk/tambah',$data);
    $this -> view('paratials/home/footer');
  }
  public function tambahproduk(){
    if(isset($_POST['submit'])){
      $data = [
        "nama" => htmlspecialchars($_POST['nama']),
        "kategori" => htmlspecialchars($_POST['kategori']),
        "harga" => htmlspecialchars($_POST['harga']),
        "deskripsi" => htmlspecialchars($_POST['deskripsi']),
        "gambar" => Upload::uploadFile($_FILES['gambar'],'/images/'),
        "status" => htmlspecialchars($_POST['status']),
      ];
      if($this -> model('Produk_model')->tambahproduk($data) > 0){
        Flasher::setFlash('Berhasil Di Tambahkan','success');
      }else{
        Flasher::setFlash('Gagal Di Tambahkan','error');
      }
      header('Location: '.BASE_URL.'/produk/tambah');
      exit;
    }else{
      header('Location: '.BASE_URL.'/produk/tambah');
      exit;
    }
  }
  public function edit(){
    
  }
  
}