<?php DECLARE(STRICT_TYPES=1);

if(0) :
  error_reporting(-1);
  ini_set('display_errors', '1');
  echo __file__;die;
endif;  

require '/var/www/ci2/fred.php';


# MAYBE EMPTY TRASH
  $ok = @unlink('../writable/logs/log-' .date('Y-m-d') .'.php');
  $ok = @array_map('unlink', glob("../writable/debugbar/*.json"));
 
# https://forum.codeigniter.com/thread-74553.html
  define('CI_DEBUG',   ! FALSE) ; 
 #define('XXXOCALHOST', 'localhost'===$_SERVER['SERVER_NAME']);

  $tmpUrl = 'https://ci4-strict.tk/';
  if(CI_DEBUG):
    $tmpUrl = 'http://localhost/ci4-strict.tk/public_html/';
  endif;
  define('BASEURL',  $tmpUrl);

  $tmpEnv = 'production';     // 'development'
  if(CI_DEBUG) : 
    $tmpEnv = 'development';  // 'production'  
  endif;  
  $_SERVER['CI_ENVIRONMENT'] = $tmpEnv;
 