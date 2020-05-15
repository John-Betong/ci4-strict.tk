<?php DECLARE(STRICT_TYPES=1);

  $clr    = CI_DEBUG ? 'fgr'   : 'fgg';
  $ver    = 'Ver: ' .CodeIgniter\CodeIgniter::CI_VERSION ;                
  $log    = @filesize(LOGFILE);
  $debug  = 'development'===$_SERVER['CI_ENVIRONMENT'] 
          ? '<sup class="fss fgr"> DEBUG </sup>' 
          : NULL
          ;
  $bld    = 'ace3f2c'; // 'c529d4f';


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
      <?php 
        $tmp = 'assets/svg/logo.svg';
        if(file_exists($tmp)):
          //
        else:
          $tmp = '../assets/svg/logo.svg';
        endif;  
        file_get_contents($tmp); 
      ?>
    </a>  
  </div>  
   
  <div class="p42 fgg dib tac">
    <h1 class="ooo <?= $clr ?>"> 
      <?= $title ?>
      <?= $debug ?>
    </h1>

    <div class="ooo dib fss"> 
      <?= $ver ?>
      -
      <em> <strong>Build:</strong> <?= $bld ?> </em>
    </div>
  </div>  
  <br>
  <em class="flr fss"><?= $log ?> &nbsp; </em>
