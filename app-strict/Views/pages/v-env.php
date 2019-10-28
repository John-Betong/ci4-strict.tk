<?php DECLARE(STRICT_TYPES=1); ?>
<?php DECLARE(STRICT_TYPES=0);

# namespace "Views\incs\doctype-001.php";


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
    <h4 class="hhh ooo"> Strict_types=0 </h4>  
  </div><!-- header -->

  <div class="nav">
    <?php require APPPATH .'Views/incs/menu-001.php' ?>
  </div>

  <div class="article">
    <h2 class="ooo"> Constants Stuff goes here </h2>
    <h4> <?= getenv('app.baseURL') ?> </h4>
  
    <?php 
      # fred( $default, '$default' );
      table($aConsts, 'My Wonderful Constants');
      fred($_ENV, '$_ENV');
      echo env('app.TimeZone'); // , $default='Asia/Bangkok'
      fred($_SERVER, '$_SERVER');
    ?>
 
  </div><!-- article -->
  
  <?php if(1): ?>
  <div class="footer tac p42">
    <?= $footer ?> 
  </div>
<?php endif; ?>


</body>
</html>

