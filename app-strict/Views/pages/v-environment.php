<?php DECLARE(STRICT_TYPES=1); 

require APPPATH ."Views/incs/doctype-001.php";
require APPPATH .'/Views/incs/fred.php';

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

<body>
  <div class="header tac">
    <?php require APPPATH .'Views/incs/logo-001.php'; ?>
  </div><!-- header -->

  <div class="nav">
    <?php require APPPATH .'Views/incs/menu-001.php' ?>
  </div>

  <div class="article">
    <h2 class="ooo"> Constants Stuff goes here </h2>
    <?php if(0): ?>
      <h4> app.baseURL ==> <?= getenv('app.baseURL') ?> </h4>
    <?php endif; ?>  
  
    <?php 
      table($aConsts, 'My Wonderful Constants');
      echo env('app.TimeZone'); // , $default='Asia/Bangkok'
      echo '<pre>'; 
        print_r($_SERVER); 
      echo '</pre>'; 
    ?>
 
  </div><!-- article -->
  
  <div class="footer tac p42">
    <?= $footer ?> 
  </div>

</body>
</html>

