<?php
class App{
  protected $controller = DEFAULT_CONTROLLER;
  protected $method = DEFAULT_METHOD;
  protected $params = [];
  public function __construct(){
    $url = $this -> ParseUrl();
    
    #___cek controller 
  if(!empty($url[0])){
  if(file_exists("../app/controllers/".ucfirst($url[0]).".php")){
        $this -> controller= ucfirst($url[0]);
      unset($url[0]);
  }
  }
  require_once("../app/controllers/{$this->controller}.php");
  $this -> controller = new $this -> controller;
    
    #___cek method
    if(isset($url[1])){
      if(method_exists($this->controller,$url[1])){
        $this -> method = $url[1];
        unset($url[1]);
      }
    }
    
    #___cek parameter
    if(!empty($url)){
      $this -> params = array_values($url);
    }
    
    call_user_func_array([$this->controller,$this->method],$this->params);
  }
  public function ParseUrl(){
    if(isset($_GET['url'])){
      return explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
    }
  }
}