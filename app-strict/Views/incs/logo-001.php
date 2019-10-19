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
  <div class="fll logo"> 
    <a href="<?= BASEURL ?>" >
        <?= file_get_contents('assets/svg/logo.svg'); ?>
    </a>  
  </div>  

  <h6 class="flr ooo">
    <?= 'Ver: 0.010 &nbsp; '; ?>
  </h6>
    
  <div class="p42 fgg">

    <div class="tac"> 
      <h1 class="ooo <?= $clr ?>"> 
        CI4-Strict.tk
      </h1>

      <h2 class="flr ooo"> 
        <a 
          class="tdn" 
          href="https://github.com/John-Betong/ci4-strict">   GitHub 
        </a>
      </h2>

      <h6 class="ooo dib"> 
        <?= $ver ?>
        -
        <i class="XXXflr "> Build: 5122737 </i>
      </h6>
    </div>  
  </div>  
