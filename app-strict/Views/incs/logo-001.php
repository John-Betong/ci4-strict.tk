<?php DECLARE(STRICT_TYPES=1);

# cc34771

$sup  = CI_DEBUG ? 'Debug'  : 'Ver';
$clr  = CI_DEBUG ? 'fgr'    : 'fgg';

$ver  = $sup . ': ' 
      .  CodeIgniter\CodeIgniter::CI_VERSION 
      ;                

$sup  = '<sup class="fss">' 
      .   $sup . ': ' 
      .   CodeIgniter\CodeIgniter::CI_VERSION 
      . '</sup>'
      ;                

# title="version <?= CodeIgniter\CodeIgniter::CI_VERSION "      
?>

  <h2 class="flr ooo"> 
    <a 
      class="tdn" 
      href="https://github.com/John-Betong/ci4-strict">
        GitHub 
    </a>
  </h2>
    
  <div class="fll logo"> 
    <a 
      href="<?= BASEURL ?>" 
      title="Home"
    >
      <?= file_get_contents('assets/svg/logo.svg'); ?>
    </a>  
  </div>  
   
  <div class="p42 fgg dib tac">
    <h1 class="ooo <?= $clr ?>"> 
      <a class="tdn" href="<?= BASEURL ?>"> CI4-Strict.tk </a>
    </h1>

    <h5 class="ooo dib"> 
      <?= $ver ?>
      -
      <i> <b>Build:</b> ba60732 </i>
    </h5>
  </div>  

