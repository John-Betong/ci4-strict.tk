<?php DECLARE(STRICT_TYPES=1);

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

  <div class="w88 mga">
    <h2 class="ooo"> 
      Rsync commands to be copied and pasted into command box:
    </h2>
    <p class="ooo"> &nbsp; </p>
  
    <?= $result ?>   
    

   </div>
 
