<?php 
class Flasher{
   public static function setFlash($pesan,$tipe)
  {
    #__pesan di kirim melalui session
    $_SESSION['flash'] = [
      'pesan' => $pesan,
      'tipe' => $tipe
      ];
  }
  public static function flash()
  {
    if(isset($_SESSION['flash'])){
      echo "<script>Swal.fire({
    position: 'center',
    icon: '".$_SESSION['flash']['tipe']."',
    title:'".$_SESSION['flash']['pesan']."',
    showConfirmButton: false,
    timer: 999
   });</script>";
       unset($_SESSION['flash']);
    }
  }
}