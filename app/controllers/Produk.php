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
    
  }
  public function edit(){
    
  }
}