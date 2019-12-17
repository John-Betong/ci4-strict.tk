<?php DECLARE(STRICT_TYPES=1);

$clr  = CI_DEBUG ? 'fgr'   : 'fgg';
$ver  = 'Ver: ' .CodeIgniter\CodeIgniter::CI_VERSION ;                
$log  = @filesize(LOGFILE);
$sup  = CI_DEBUG ? '<sup class="fss"> DEBUG</sup>' : NULL;

?>

  <div class="flr ooo"> 
    <a 
      class="tdn" 
      href="https://github.com/John-Betong/ci4-strict">
        GitHub 
    </a>
  </div>
    
  <div class="fll logo"> 
    <a href="<?= BASEURL ?>" title="Home">
      <?= file_get_contents( 'assets/svg/logo.svg'); ?>
    </a>  
  </div>  
   
  <div class="p42 fgg dib tac">
    <h1 class="ooo <?= $clr ?>"> 
      <?= $title ?>
      <?= $sup ?>
    </h1>

    <div class="ooo dib fss"> 
      <?= $ver ?>
      -
      <em> <strong>Build:</strong> dbf36b8 (previous: 7c15ad4)  </em>
    </div>
  </div>  
  <br>
  <em class="flr fss"><?= $log ?> &nbsp; </em>
