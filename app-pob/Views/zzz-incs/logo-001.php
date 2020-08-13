<?php DECLARE(STRICT_TYPES=1);

  $ver    = 'Ver: ' .CodeIgniter\CodeIgniter::CI_VERSION ;                
  $log    = @filesize(LOGFILE);
  $debug  = 'development'===$_SERVER['CI_ENVIRONMENT'] 
          ? '<sup class="fss fgr"> DEBUG </sup>' 
          : NULL
          ;
  $bld    = '5553317 '; // a18fdea  [d9864e3 a18fdea] '; // '275ee07s'; // '2c04e1cs'; 

  $logo = 'assets/svg/logo.svg';
  if(file_exists($logo)):
    //
  else:
    $logo = '../assets/svg/logo.svg';
  endif;  

if(1): ?>

<div class="ooo bd1"> 
  <a class="fll logo" href="<?= BASEURL ?>" title="Home">
    <?= file_get_contents($logo) ?>
  </a>  

  <span class="z02 flr dib bge XXXbgr">  
    &nbsp; 
    <?php require APPPATH .'Views/incs/_debug-links.php'; ?>
  </span>  

  <a class="hhh ooo tdn flr" 
    href="https://github.com/John-Betong/ci4-strict">
      GitHub 
  </a>

  <h1 class="ooo"> 
    <?= $title .$debug ?>
  </h1>

  <div class="w99 xxxdib fss bd1"> 
    <?= $ver ?>
    -
    <em> <strong>Build:</strong> <?= $bld ?> </em>

    <div class="ooo w99 bgr XXXtar">
      <ul class="tac bga">
        <li class="dib"> 1asdf </li>
        <li class="dib"> 2sdf </li>
        <li class="dib"> 3asdf </li>
      </ul>  
    </div>
  </div>

</div><!--  class="ooo bd1" --> 

  

<!-- = = = = = = = = = =  = = = = = = = = = =  = = = = = = = = = =  -->



   
  <div class="hhh p42 fgg dib tac bd1">

    <div class="hhh ooo dib fss bd1"> 
      <?= $ver ?>
      -
      <em> <strong>Build:</strong> <?= $bld ?> </em>
    </div>
  </div>  

  <div class="hhh clb flr bgr XXXdib tar"> 
    <?php # require APPPATH .'Views/incs/_debug-links.php'; ?>
  </div>

  <div class="hhh XXXclb flr bgr XXXdib tar"> 
    <?php require APPPATH .'Views/incs/_debug-links.php'; ?>
  </div>  

  <em class="hhh flr fss bd1"> Log: <?= $log ?> &nbsp; </em>
<?php else: ?>
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
        echo file_get_contents($logo); 
      ?>
    </a>  
  </div>  
   
  <div class="p42 fgg dib tac bd1">
    <h1 class="ooo"> 
      <?= $title ?>
      <?= $debug ?>
    </h1>

    <div class="ooo dib fss bd1"> 
      <?= $ver ?>
      -
      <em> <strong>Build:</strong> <?= $bld ?> </em>
    </div>
  </div>  

  <div class="hhh clb flr bgr XXXdib tar"> 
    <?php # require APPPATH .'Views/incs/_debug-links.php'; ?>
  </div>

  <div class="XXXclb flr bgr XXXdib tar"> 
    <?php # require APPPATH .'Views/incs/_debug-links.php'; ?>
  </div>  

  <em class="flr fss bd1"> Log: <?php # $log ?> &nbsp; </em>
<?php endif;  

