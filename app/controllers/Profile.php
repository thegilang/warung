<?php

class Profile extends Controller {
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
      $this -> view('layouts/profile/index',$data);
      $this -> view('paratials/home/footer');
  }
  public function update (){
    if(isset($_POST['submit'])){
      $data = [
        "id" => $_POST['id'],
        "nama" => htmlspecialchars($_POST['nama']),
        "user" => htmlspecialchars($_POST['user']),
        "hp" => htmlspecialchars($_POST['hp']),
        "email" => htmlspecialchars($_POST['email']),
        "alamat" => htmlspecialchars($_POST['alamat'])
      ];
      if($this -> model('Admin_model')->getUpdateProfile($data) > 0){
        Flasher::setFlash('Berhasil Di Ubah','success');
      }else{
        Flasher::setFlash('Gagal Di Ubah','error');
      }
      header('Location: '.BASE_URL.'/profile');
      exit;
    }else{
      header('Location: '.BASE_URL.'/profile');
      exit;
    }
  }
  public function changepass(){
    if(isset($_POST['submit'])){
      $data = [
        "id" => $_POST['id'],
        "pass1" => password_hash(htmlspecialchars($_POST['pass1']),PASSWORD_DEFAULT),
        "pass2" => htmlspecialchars($_POST['pass2'])
      ];
      if(htmlspecialchars($_POST['pass1']) == $data['pass2']){
        if($this -> model('Admin_model')->getUpdatePass($data) > 0){
          Flasher::setFlash('Berhasil Di Ubah','success');
        }else{
          Flasher::setFlash('Gagal Di Ubah','error');
        }
      }else{
        Flasher::setFlash('Konfirmasi Tidak Sesuai','warning');
      }
      header('Location: '.BASE_URL.'/profile');
      exit;
    }else{
      header('Location: '.BASE_URL.'/profile');
      exit;
    }
  }
}