<?php 
$CONFIG=[];
$openfile = fopen(__DIR__.'/.env','r'); 
while($line=fgets($openfile)){
  $chars = preg_split('/=/', $line, -1, PREG_SPLIT_OFFSET_CAPTURE);
  array_push($CONFIG,$chars[1][0]);
}
define('DB_HOST',trim($CONFIG[0]));
define('DB_NAME',trim($CONFIG[1]));
define('DB_USER',trim($CONFIG[2]));
define('DB_PASS',trim($CONFIG[3]));
define('BASE_URL', "http://{$_SERVER['HTTP_HOST']}/".trim($CONFIG[4]));
define('DEFAULT_CONTROLLER',trim($CONFIG[5]));
define('DEFAULT_METHOD',trim($CONFIG[6]));