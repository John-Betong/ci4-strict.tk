<?php declare(strict_types=1);
error_reporting(-1);
ini_set('display_errors', 'true');
# $this->extend('incs/menu-pob-PARTIAL');

defined('LOCALHOST') ?: define('localhost', 'localhost'===$_SERVER['SERVER_NAME']);
$BASE_URL = LOCALHOST 
  ? 'http://localhost/ci4-strict.tk/public_html/' 
  : 'https://ci4-strict.tk/';

require APPPATH .'Views/incs/doctype-pob.php'; 

$aLinksTop = [
  'home'  => 'Home',
  'bwci4' => 'Buit with',
  'play'  => 'Playground',
  'info'  => 'Info',
  'lhost' => 'Localhost',
];
$sLinksTop = ''; // '<div class="menu w88 lsn tac">';
  foreach($aLinksTop as $key => $link) :
    # echo '<p>' .$key .' ==> ' .$url1 .'</p>' ."\n";
    $current = $key == $url0 ? ' current'  : '';
    $sLinksTop .= <<< ____EOT
    <a class="{$key}{$current}" href="{$BASE_URL}{$key}"> $link </a> 
    \n
____EOT;
  endforeach;

switch($url0) :
  case '' :
  case 'home' :
  default:
    $aLinksSubs = [
      'welcome'         => 'Welcome', 
      'welcome-amp'     => 'Welcome AMP', 
      'welcome-message' => 'Welcome message', 
      'welcome-strict'  => 'Welcome STRICT',  
    ];
  break;

  case 'bwci4':
  case 'bwci4-database':
  case 'builtwithci4' :
    $aLinksSubs = [
      'bwci4-images'    => 'Images',  
      'bwci4-database'  => 'Database',  
      'bwci4-add-site'  => 'Add Project', 
      'bwci4-add-spare' => 'SPARE', 
    ];
  break;

  case 'play' :
    $aLinksSubs = [
      'playground'  => 'Playground',  
    ];
  break;

  case 'info' :
    $aLinksSubs = [
      'conversion-script' => 'Conversion Script', 
      'download-install'  => 'Download and Install',  
      'more'              => 'More Info', 
    ];
  break;
endswitch;
$sLinksSubs = '';  
  foreach($aLinksSubs as $key => $tmp) :
    $sLinksSubs .= <<< ____EOT
      <li>
        <a href="{$BASE_URL}{$url0}/{$key}"  class="$key">   $tmp </a> 
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
  </div>    

  <div class="w99 bg0 mg4 hg9">
    <svg 
      viewBox="0 25 50 25" 
      class="hg9"
      preserveAspectRatio="none">
      <polygon points="0,0  0,50  50,25" fill="royalblue">
    </svg>
  </div>
  
  <div class="w99 mgX">
    <ul class="subs w88 lsn tac">
      <?= $sLinksSubs ?>
    </ul>  
  </div>  
  
  <h3 class="tac"> <?= $title ?> </h3>

  <?php # echo  $this->extend('Blog\Views\default') ?>
  <?php # echo $this->extend('pages/v-bwci4-images') ?>

  <?php # echo  $this->renderSection('content') ?>





  <dl class="w88 mga bd1">
    <dt> <?= $url1 ?> </dt>
    <dd> &nbsp; </dd>
    <!--
      <dd> <?php fred('uri_string() ==> '. uri_string() ); ?> </dd>
      <dd> <?php fred('$url0 ==> ' .$url0); ?> </dd>
      <dd> <?php fred('$url1 ==> ' .$url1); ?> </dd>
      <dd> <?php fred('$url2 ==> ' .$url2); ?> </dd>
      <dd> <?php fred($_SERVER); ?> </dd>
    -->
  </dl>
















<?php require '/var/www/ci2/footer.php'; ?>

<?php if(0): ?>
  <div class="mg6"> 
    <h5 class="fll">
          <span>
      &nbsp; &nbsp;
      <a href="https://validator.w3.org/nu/?showsource=yes&amp;showoutline=yes&amp;doc=https%3A%2F%2Fjohn-betong.tk%2Fdiagonal"> HTML Validator </a> 
      &nbsp; &nbsp;
      <a href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fjohn-betong.tk%2Fdiagonal&amp;profile=css3svg&amp;usermedium=all&amp;warning=1&amp;vextwarning=&amp;lang=en"> Jigsaw CSS Validator </a>
      &nbsp; &nbsp;
      <a href="https://validator.ampproject.org/#url=https%3A%2F%2Fjohn-betong.tk%2Fdiagonal"> AmpProject Validator </a>
    </span>    </h5>
    <h5 class="flr">
      App\Controllers\C_Home::index       ==> v-home    </h5>
  </div>

  <h1 class="tac mg9">
    John_Betong's CI4 Menu  </h1>

      <h2 class="tac">
      $menuPaul ==> diagonal    </h2> 
    <div class="foot w99 tac bg2 bg5 fg6 lh2">
      <a class="fll fg7 lsn" href="https://validator.w3.org/nu/?showsource=yes&amp;showoutline=yes&amp;doc=https%3A%2F%2Fjohn-betong.tk%2Fdiagonal">
        HTML Validator
      </a>  

      <a class="flr lsn fg7" href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fjohn-betong.tk%2Fdiagonal&amp;profile=css3svg&amp;usermedium=all&amp;warning=1&amp;vextwarning=&amp;lang=en">
        Jigsaw CSS Validator
      </a>  

      Wonderful place for a footer
    </div>
<?php endif ?>    
    
</body></html>  