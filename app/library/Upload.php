<?php

class Upload{
  private static $tipeFile =[
    "jpg",
    "png",
    "gif",
    "mp3",
    "mp4",
    "jpeg",
    "webp"
  ];
  private static function parseDir($dir){
    $dir = $dir[0] !== "/" ? $dir : substr($dir,1);
    return $dir;
  }
  public static function deleteFile($file,$dir){
    $path = __DIR__.'/../../public/storage/'.$dir;
    if(file_exists($path.$file)){
      unlink($path.$file);
    }else{
      Flasher::setFlash("File Tidak Di Temukan","warning");
    }
  }
  public static function uploadFile($file,$dir){
    $filetmp = $file["tmp_name"] == "" ? $file["full_path"] : $file["tmp_name"];
    $tipe = pathinfo($file['name'],PATHINFO_EXTENSION);
    if(in_array($tipe,self::$tipeFile)){
      $filename = uniqid().'.'.$tipe;
      $parsefile = self::parseDir($dir).$filename;
      $storage = __DIR__.'/../../public/storage/';
      if(move_uploaded_file($filetmp,$storage.$parsefile)){
        return $parsefile;
      }
    }
    return false;
  }
}