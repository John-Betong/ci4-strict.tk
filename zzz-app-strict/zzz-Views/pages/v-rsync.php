<?php DECLARE(STRICT_TYPES=1);

# namespace "Views\incs\doctype-001.php";

require APPPATH ."Views/incs/doctype-001.php";

  $commands = [];
  $src = '/var/www/ci4-strict.tk';
  $dst = 'root@178.128.25.230:/var/www/ci4-strict.tk';
  $dst = 'root@167.71.222.214:/var/www/ci4-strict.tk';
  

  $commands['rsync .env-THELOT'] = <<< ____EOT
  rsync -avz  {$src}/ -e ssh {$dst}/
____EOT;

# RSYNC
  $result ='<dl class="dib bd1 p42 bgE">';
    foreach($commands as $id => $command) :
      $result .= '<dt>' .$id .'</dt>';
      $result .= '<dd> &nbsp; </dd>';
      $result .= '<dd>' .$command .'</dd>';
      $result .= '<dd> &nbsp; </dd>';
    endforeach;
  $result .= '</dl>';

?>

<body>
  <div class="header tac">
    <?php require APPPATH .'Views/incs/logo-001.php'; ?>
  </div><!-- header -->

  <div class="nav">
    <?php require APPPATH .'Views/incs/menu-001.php' ?>
  </div>

  <div class="article">
    <h2 class="ooo"> 
      Rsync commands to be copied and pasted into command box:
    </h2>
    <p class="ooo"> &nbsp; </p>
  
    <?= $result ?>   
    <p> <br><br><br><br><br><br><br><br> </p>
    <p> <br><br><br><br><br><br><br><br> </p>
    <p> <br><br><br><br><br><br><br><br> </p>

   </div><!-- article -->
  
   <div class="footer tac p42">
     <?= $footer ?> 
   </div>

</body>
</html>