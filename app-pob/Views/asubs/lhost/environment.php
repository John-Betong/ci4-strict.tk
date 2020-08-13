<?php DECLARE(STRICT_TYPES=1); 


$showDbugBackTrace  = defined('SHOW_DEBUG_BACKTRACE') 
                    ? 'TRUE' 
                    : 'NOT DEFINED';
$aConsts = [
  'APPPATH'         => APPPATH,
  'CI_DEBUG'        => CI_DEBUG ? 'TRUE' : 'FALSE',  
# 'CI_ENVIRONMENT'  => 'Not set - CI_ENVIRONMENT',  
# 'CIPATH'          => 'Not set - CIPATH',  
# 'COMPOSERPATH'    => 'Not set - COMPOSERPATH',  
  'ENVIRONMENT'     => ENVIRONMENT,  
  'KINT_DIR'        => KINT_DIR,  
# 'MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT' => MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT,
  'FCPATH'          => FCPATH,
  'LOCALHOST'       => LOCALHOST,
  'LOG_FILE'        => LOG_FILE,
  'ROOTPATH'        => ROOTPATH,
# 'SPARKED'         => 'Not set - SPARKED',
# 'STDIN'           => 'Not set - STDIN',
# 'SUPPORTPATH'     => 'Not set - SUPPORTPATH',
  'SYSTEMPATH'      => SYSTEMPATH,
  'TESTPATH'        => TESTPATH,
  'WRITEPATH'       => WRITEPATH,
  'SHOW_DEBUG_BACKTRACE' => $showDbugBackTrace,
];

?>

  <div class="w88 mga">
    <h2 class="ooo"> Constants Stuff goes here </h2>
  
    <?php 
      table($aConsts, 'My Wonderful Constants');
      echo env('app.TimeZone'); // , $default='Asia/Bangkok'
      echo '<pre>'; 
        if(LOCALHOST): print_r($_SERVER); endif;
      echo '</pre>'; 
    ?>
 
  </div>

