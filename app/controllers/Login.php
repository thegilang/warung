<?php

class Login extends Controller {
  public function index(){
    $this -> view('paratials/login/header');
    $this -> view('layouts/login/index');
    $this -> view('paratials/login/footer');
  }
  public function Autentik (){
    if(isset($_POST['submit'])){
      if(strlen($_POST['user']) >= 3 && strlen($_POST['pass']) >= 3){
        $data = [
          'user' => htmlspecialchars($_POST['user']),
          'pass' => htmlspecialchars($_POST['pass'])
        ];
    
        if($this -> model('Admin_model') -> getInfoAdmin($data['user'])['status'] > 0 ){
          $admin_data = $this -> model('Admin_model') -> getInfoAdmin($data['user'])['data'];
          if(password_verify($data['pass'],$admin_data['password'])){
            $_SESSION['info_login'] = [
              'admin_id' => $admin_data['admin_id'],
              'status_login' => true
            ];
            Flasher::setFlash('Sukses Login','success');
            header('Location: '.BASE_URL.'/home');
            exit;
          }else{
            Flasher::setFlash('password salah','error');
          }
        }else{
          Flasher::setFlash('username tidak di temukan','error');
        }
      }else{
        Flasher::setFlash('Tidak Boleh Di bawah 3 karakter','error');
      }
    }
    header('Location: '.BASE_URL.'/login');
    exit;
  }
}