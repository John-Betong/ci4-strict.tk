<?php DECLARE(STRICT_TYPES=1); 

require APPPATH ."Views/incs/doctype-001.php";

$showDbugBackTrace  = defined('SHOW_DEBUG_BACKTRACE') 
                    ? 'TRUE' 
                    : 'NOT DEFINED';
$aConsts = [
  'APPPATH'       => APPPATH,
  'CI_DEBUG'      => CI_DEBUG ? 'TRUE' : 'FALSE',  
  'ENVIRONMENT'   => ENVIRONMENT,  
  'FCPATH'        => FCPATH,
  'SYSTEMPATH'    => SYSTEMPATH,
  'WRITEPATH'     => WRITEPATH,
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
    <h4> <?= getenv('app.baseURL') ?> </h4>
  
    <?php 
      # f red( $default, '$default' );
      table($aConsts, 'My Wonderful Constants');
      fred($_ENV, '$_ENV');
      echo env('app.TimeZone'); // , $default='Asia/Bangkok'
      fred($_SERVER, '$_SERVER');
    ?>
 
  </div><!-- article -->
  
  <div class="footer tac p42">
    <?= $footer ?> 
  </div>

</body>
</html>

