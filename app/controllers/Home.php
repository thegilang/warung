<?php
class Home extends Controller{
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
    $this -> view('paratials/home/header');
    $this -> view('layouts/home/index',$data);
    $this -> view('paratials/home/footer');
  }
  public function keluar(){
    unset($_SESSION['info_login']);
    Flasher::setFlash('BERHASIL KELUAR','success');
    header('Location: '.BASE_URL.'/login');
    exit;
  }
 
}