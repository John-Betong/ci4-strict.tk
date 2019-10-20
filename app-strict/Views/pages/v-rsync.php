<?php DECLARE(STRICT_TYPES=1);

# namespace "Views\incs\doctype-001.php";

require APPPATH ."Views/incs/doctype-001.php";

  $commands = [];
  $src = '/var/www/ci4-strict.tk';
  $dst = 'root@139.162.244.63:/var/www/ci4-strict.tk';

  $commands['rsync .env-ONLINE'] = <<< ____EOT
  rsync -avz  {$src}/.env-ONLINE -e ssh {$dst}/.env
____EOT;

  $commands['rsync app'] = <<< ____EOT
  rsync -avz  {$src}/app/ -e ssh {$dst}/app/
____EOT;

  $commands['rsync app-strict'] = <<< ____EOT
  rsync -avz  {$src}/app-strict/ -e ssh {$dst}/app-strict/
____EOT;


  $commands['rsync system'] = <<< ____EOT
    rsync -avz  {$src}/system/ -e ssh {$dst}/system/
____EOT;

  $commands['rsync public_html'] = <<< ____EOT
    rsync -avz  {$src}/public_html/ -e ssh {$dst}/public_html/
____EOT;

  $commands['rsync README.md'] = <<< ____EOT
    rsync -avz  {$src}/README.md -e ssh {$dst}/
____EOT;

  $commands['rsync STRICT-INSERT.php'] = <<< ____EOT
    rsync -avz  {$src}/STRICT-INSERT.php -e ssh {$dst}/
____EOT;

  # $commands['whoami'] = 'whoami';
  # $commands['date']   = 'date';

# RSYNC
  $result ='<dl class="bd1 p42 dib">';
    foreach($commands as $id => $command) :
      $result .= '<dt>' .$id .'</dt>';
      $result .= '<dd>' .$command .'</dd>';
      $result .= '<dd> &nbsp; </dd>';
    endforeach;
  $result .= '</dl>';

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
    <h2 class="ooo"> 
      Rsync commands to be copied and pasted into command box:
    </h2>
    <p class="ooo"> &nbsp; </p>
  
    <?= $result ?>   
   </div><!-- article -->
  
  <?php if(10): ?>
    <div class="footer tac p42">
      <?= $footer ?> 
    </div>
  <?php endif; ?>

</body>
</html><?php
/*
  ####################################################################
  
  echo '<p>';
    echo '<a href="?test=1"> whoami </a> &nbsp;&nbsp;'; 
    echo '<a href="?test=2"> date   </a> &nbsp;&nbsp;'; 
    echo '<a href="?test=3"> Rsync  </a> &nbsp;&nbsp;'; 
  echo '</p>';  

  $test = $_GET['test'] ?? NULL;
  vd($test);
  if($test):
    $tmp = 'rsync -avz /var/www/example.com/fileToUpload.php -e ssh root@123.321.111.222/var/www/example.com/';
    $tmp = '/usr/bin/rsync -avz /var/www/ci4-strict.tk/STRICT-LOG.php -e ssh root@139.162.244.63:/var/www/ci4-strict.tk/';

    $tmp = '/usr/bin/rsync -avz /var/www/ci4-strict.tk/STRICT-LOG.php -e "ssh -o StrictHostKeyChecking=no,UserKnownHostsFile=/dev/null -i /home/john/.ssh/id_rsa"  root@139.162.244.63:/var/www/ci4-strict.tk/';

    $tmp = 'rsync -avz /var/www/ci4-strict.tk/STRICT-LOG.php -e ssh root@139.162.244.63:/var/www/ci4-strict.tk/';


$bad  = 'rsync -e "ssh -o StrictHostKeyChecking=no,UserKnownHostsFile=/dev/null" --other-options-here';
$ok   = 'rsync -e "ssh -o StrictHostKeyChecking=no,UserKnownHostsFile=/dev/null -i /var/www/.ssh/id_rsa" --other-options-here';
$ok   = 'rsync -e "ssh -o StrictHostKeyChecking=no,UserKnownHostsFile=/dev/null -i /var/www/.ssh/id_rsa" --other-options-here';
# /home/john/.ssh/id_rsa.pub

    if('1' === $test) : $command = 'whoami';  endif;
    if('2' === $test) : $command = 'date';    endif;
    if('3' === $test) : $command = $tmp;      endif;
    //  exec ( string $command [, array &$output [, int &$return_var ]] ) : string
    chdir('/home/john/.ssh'); // drwx------
    # chdir('/home/john/');
    echo '<br>'. getcwd() .'<br>';
    $result = exec ( '"' .$command .'"', $output, $retVar);

    $prn = print_r($output, TRUE);

    echo $tmp = <<< ____EOT
    <dl>
      <dt> \$command ==> $command <dt>
      <dd> <br> </dd>
      <dt> \$result </dt>
        <dd> $result </dd>
      <dt> \$retVar </dt> 
        <dd> $retVar <dd>
      <dt> \$output </dt>
        <dd> $prn </dd>
    </dl>    
____EOT;
  endif;

  # echo '</pre>';
  ####################################################################
*/  
  ?>


