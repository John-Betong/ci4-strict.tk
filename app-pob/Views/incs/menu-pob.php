<?php declare(strict_types=1);
# $this->extend('incs/menu-pob-PARTIAL');

# require APPPATH .'Views/incs/doctype-pob.php'; 

$aLinksTop = [
  'home'        => 'Home',
  'bwci4'       => 'Built with CI4',
  'playground'  => 'Playground',
# 'spare'       => 'Spare',
  'info'        => 'Info',
  'lhost'       => 'Localhost',
];
$sLinksTop = ''; // '<div class="menu w88 lsn tac">';

  $bUrl =  base_url();
  #$uri = service('uri');
  foreach($aLinksTop as $key => $link) :
    $current = $key == $uri->getSegment(1, 'home') ? 'current'  : '';
    $qwe = base_url($key);

    $sLinksTop .= <<< ____EOT
    <a class="{$key} {$current}" href="$qwe"> $link </a> 
    \n
____EOT;
  endforeach;

$mode = $uri->getSegment(1, 'home') ;
switch( $mode ) :
  case '' :
  case 'home' :
  default:
    $aLinksSubs = [
      'welcome'         => 'Welcome', 
      'welcome-amp'     => 'Welcome AMP', 
      'welcome-message' => 'Welcome message', 
      'welcome-4-0-0'   => 'Welcome version 4.0.0',  
    ];
  break;

  case 'bwci4':
  case 'builtwithci4' :
    $aLinksSubs = [
      'bwci4-view-sites'  => 'View Sites', 
    # 'bwci4-add-site'    => 'Add Project', 
    # 'bwci4-images'      => 'Images',  
    ];
  break;

  case 'play' :
    $aLinksSubs = [
      'playground-temp'  => 'Playground',  
    ];
  break;

  case 'info' :
    $aLinksSubs = [
      'conversion-script' => 'Conversion Script', 
      'download-install'  => 'Download and Install',  
      'more'              => 'More Info', 
    ];
  break;

  case 'playground' :
    $aLinksSubs = [
      'playground'  => 'Playground',  
    ];
  break;

  case 'lhost' :
    $aLinksSubs = [
      'environment' => 'Environment', 
      'rsync'       => 'RSYNC',  
    ];
  break;
endswitch;
$sSubs = '';  
  foreach($aLinksSubs as $key => $tmp) :
    # $qwe = base_url($key);
    $qwe = base_url($mode .'/' .$key);
    $sSubs .= <<< ____EOT
      <li>
        <a href="$qwe" class="$key" title="$qwe"> $tmp </a> 
      </li>
      \n
____EOT;
  endforeach;
  # fred( htmlspecialchars($linx));die;
# echo '==> ' .$mode; die;
echo "\n";

?>
<body>
  <div class="pof POA w99">
    <div class="menu">
      <?= $sLinksTop ?>
      <span class="dot">&nbsp;</span>    
    </div>
      <div class="tal fss fwb" style="background-color: #fff; color: #000">
        <?= BUILD ?>
      </div>  
  </div>    

  <div class="w99 bg0 mg4 hg9">
    <!--
    <svg 
      viewBox="0 25 50 25" 
      class="hg9"
      preserveAspectRatio="none">
      <polygon points="0,0  0,50  50,25" fill="royalblue"\>
    </svg>
  -->
  </div>
  
  <div class="w99 mgX bgr">
    <ul class="subs w88 lsn tac">
      <?= $sSubs ?>
    </ul>  
    <p> <br><br>  </p>
  </div>  
  

