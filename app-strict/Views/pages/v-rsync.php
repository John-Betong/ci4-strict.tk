<?php DECLARE(STRICT_TYPES=1);

# namespace "Views\incs\doctype-001.php";

require APPPATH ."Views/incs/doctype-001.php";

  $commands = [];
  $src = '/var/www/ci4-strict.tk';
  $dst = 'root@139.162.244.63:/var/www/ci4-strict.tk';

  $commands['rsync .env-THELOT'] = <<< ____EOT
  rsync -avz  {$src}/ -e ssh {$dst}/
____EOT;

# RSYNC
  $result ='<dl class="bd1 p42 dib">';
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
    <p> <br><br><br><br><br><br><br><br> </p>
    <p> <br><br><br><br><br><br><br><br> </p>
    <p> <br><br><br><br><br><br><br><br> </p>

   </div><!-- article -->
  
   <div class="footer tac p42">
     <?= $footer ?> 
   </div>

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


