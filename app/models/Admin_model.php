<?php

class Admin_model{
  private $tabel = "tb_admin";
  private $db;
  public function __construct(){
    $this -> db = new Database;
  }
  public function getInfoAdmin($user){
    $this -> db -> query("SELECT * FROM {$this->tabel} WHERE username=:user");
    $this -> db -> bind('user',$user);
    $result = [
      'status' => $this -> db -> rowCount(),
      'data' => $this -> db -> single()
    ];
    return $result;
  }
  public function getInfoById($id){
    $this -> db -> query("SELECT * FROM {$this->tabel} WHERE admin_id=:id");
    $this -> db -> bind('id',$id);
    $result = [
      'status' => $this -> db -> rowCount(),
      'data' => $this -> db -> single()
    ];
    return $result;
  }
  public function getUpdateProfile($data){
    $this -> db -> query("UPDATE {$this->tabel} SET admin_name=:nama, username=:user,admin_telp=:hp,admin_email=:email,admin_address=:alamat WHERE admin_id=:id");
    $this -> db -> bind('id',$data['id']);
    $this -> db -> bind('nama',$data['nama']);
    $this -> db -> bind('user',$data['user']);
    $this -> db -> bind('hp',$data['hp']);
    $this -> db -> bind('email',$data['email']);
    $this -> db -> bind('alamat',$data['alamat']);
    return $this -> db -> rowCount();
  }
  public function getUpdatePass($data){
    $this -> db -> query("UPDATE {$this->tabel} SET password=:pass WHERE admin_id=:id");
    $this -> db -> bind('id',$data['id']);
    $this -> db -> bind('pass',$data['pass1']);
    return $this -> db -> rowCount();
  }
}