<?php

class Kategori extends Controller {
  public function index(){
    $data = [];
    if(isset($_SESSION['info_login'])){
      if($_SESSION['info_login']['status_login']){
        if($this -> model('Admin_model')->getInfoById($_SESSION['info_login']['admin_id'])['status']>0){
          $data['data_admin'] = $this -> model('Admin_model')->getInfoById($_SESSION['info_login']['admin_id'])['data'];
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
    $data['getKategori'] = $this -> model('Kategori_model')->getKategori();
    $this -> view('paratials/home/header');
    $this -> view('layouts/kategori/index',$data);
    $this -> view('paratials/home/footer');
  }
  public function edit($id=null){
    $data = [];
    if(isset($_SESSION['info_login'])){
      if($_SESSION['info_login']['status_login']){
        if($this -> model('Admin_model')->getInfoById($_SESSION['info_login']['admin_id'])['status']>0){
          $data['data_admin'] = $this -> model('Admin_model')->getInfoById($_SESSION['info_login']['admin_id'])['data'];
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
    $data['kategori'] = $this -> model('Kategori_model')->getKategoriById($id);
    $this -> view('paratials/home/header');
    $this -> view('layouts/kategori/edit',$data);
    $this -> view('paratials/home/footer');
  }
  public function hapus($id=null){
    if(!is_null($id)){
      if($this -> model('Kategori_model')->hapuskategori($id) > 0){
          Flasher::setFlash('Berhasil Di Hapus','success');
      }else{
          Flasher::setFlash('Gagal Di Hapus','error');
      }
    }
      header('Location: '.BASE_URL.'/kategori');
      exit;
  }
  public function tambah(){
    $data = [];
    if(isset($_SESSION['info_login'])){
      if($_SESSION['info_login']['status_login']){
        if($this -> model('Admin_model')->getInfoById($_SESSION['info_login']['admin_id'])['status']>0){
          $data['data_admin'] = $this -> model('Admin_model')->getInfoById($_SESSION['info_login']['admin_id'])['data'];
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
    $data['getKategori'] = $this -> model('Kategori_model')->getKategori();
    $this -> view('paratials/home/header');
    $this -> view('layouts/kategori/tambah',$data);
    $this -> view('paratials/home/footer');
  }
  public function tambahkategori(){
    if(isset($_POST['submit'])){
      $data = [
        "nama" => htmlspecialchars($_POST['nama']),
      ];
      if($this -> model('Kategori_model')->tambahkategori($data) > 0){
        Flasher::setFlash('Berhasil Di Tambahkan','success');
      }else{
        Flasher::setFlash('Gagal Di Tambahkan','error');
      }
      header('Location: '.BASE_URL.'/kategori/tambah');
      exit;
    }else{
      header('Location: '.BASE_URL.'/kategori/tambah');
      exit;
    }
  }
  public function editkategori(){
    if(isset($_POST['submit'])){
      $data = [
        "id" => $_POST['category_id'],
        "nama" => htmlspecialchars($_POST['nama']),
      ];
      if($this -> model('Kategori_model')->editkategori($data) > 0){
        Flasher::setFlash('Berhasil Di Ubah','success');
      }else{
        Flasher::setFlash('Gagal Di Ubah','error');
      }
      header('Location: '.BASE_URL.'/kategori/edit/'.$data['id']);
      exit;
    }else{
      header('Location: '.BASE_URL.'/kategori/edit'.$data['id']);
      exit;
    }
  }
}