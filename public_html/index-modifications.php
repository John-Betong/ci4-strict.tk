<?php DECLARE(STRICT_TYPES=1);

// DEBUG MODIFICATIONNS START =========================================
    define('LOCALHOST', FALSE); // 'localhost'===$_SERVER['SERVER_NAME']);
    define('CI_DEBUG',  LOCALHOST);

    $tmpUrl = 'https://ci4-strict.tk/';
    if(LOCALHOST):
      // MAYBE EMPTY TRASH
        $ok = @unlink('../writable/logs/log-' .date('Y-m-d') .'.php');
        $ok = @array_map('unlink', glob("../writable/debugbar/*.json"));
      $tmpUrl = 'http://localhost/ci4-strict.tk/public_html/';
    endif;
    define('BASEURL',  $tmpUrl);

    $tmpEnv = 'production'; // 'development'
    if(CI_DEBUG) : 
      $tmpEnv = 'development'; // 'production'  
    endif;  
    $_SERVER['CI_ENVIRONMENT'] = $tmpEnv;
    define('CI_ENVIRONMENT', $tmpEnv);
// DEBUG MODIFICATIONNS END ===========================================