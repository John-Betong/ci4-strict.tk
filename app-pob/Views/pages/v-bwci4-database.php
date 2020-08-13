<?php DECLARE(STRICT_TYPES=1);

defined('LOCALHOST') ?: define('localhost', 'localhost'===$_SERVER['SERVER_NAME']);
$BASE_URL = LOCALHOST 
	? 'http://localhost/ci4-strict.tk/public_html/' 
	: 'https://ci4-strict.tk/';

require APPPATH .'Views/incs/doctype-pob.php'; 

$mode = substr($_SERVER['PATH_INFO'], 1);
# fred($mode);die;
switch($mode) :
  case 'home' :
  	$aLinks = [
  	  'welcome' 		=> 'Welcome',	
  	  'welcome-amp' 	=> 'Welcome AMP',	
  	  'welcome-message' => 'Welcome message',	
  	  'welcome-strict' 	=> 'Welcome STRICT',	
  	];
  break;

  case  'bwci4-database':
  case 'builtwithci4' :
  	$aLinks = [
  	  'bwci4-images' 	=> 'Images',	
  	  'bwci4-database' 	=> 'Database',	
  	  'bwci4-add-site' 	=> 'Add Project',	
  	  'bwci4-add-spare' => 'SPARE',	
  	];
  break;

  case 'playground' :
  	$aLinks = [
  	  'playground' 	=> 'Playground',	
  	];
  break;

  case 'info' :
  	$aLinks = [
  	  'conversion-script'	=> 'Conversion Script',	
  	  'download-install' 	=> 'Download and Install',	
  	  'more' 				=> 'More Info',	
  	];
  break;

endswitch;
$links = '<ul class="subs w88 lsn tac">';
  foreach($aLinks as $key => $link) :
	$links .= <<< ____EOT
	 <li> <a href="$key"> $link </a> </li>
____EOT;
  endforeach;
$links .= '</ul>';	
echo "\n";
?>

<body>
  <div class="pof POA w99">
    <div class="menu" style="background-color:blue;">
      <a href="<?=$BASE_URL ?>home" 	 class="home"> 		Home </a>
      <a href="<?=$BASE_URL ?>welcome"   class="welcome"> 	Welcome </a>
      <a href="<?=$BASE_URL ?>diagonal"  class="diagonal"> 	Diagonal </a>
      <a href="<?=$BASE_URL ?>home"  	 class="amp "> 		Amp </a>
      <a href="<?=$BASE_URL ?>test"  	 class="test current"> Test </a>
      <span class="dot">&nbsp;</span>
  	</div>
  </div>    

  <div class="w99 bg0 mg4 hg9">
    <svg 
	  viewBox="0 25 50 25" 
	  class="hg9" 
	  preserveAspectRatio="none">
  	  <polygon points="0,0  0,50  50,25" fill="#0000ff"></polygon>
	</svg>
  </div>
  
  <div class="w99 mgX">
   	<?= $links ?>
  </div>  
  
    <?php 
      require '/var/www/footer.php';
    /*
    <ul class="hhh subs w88 lsn tac">
      <li>
      	<a href="https://john-betong.tk/home/home-01" title="https://john-betong.tk/home/home-01">
      		home-01
      	</a>
      </li>
      <li>
      	<a href="https://john-betong.tk/home/home-02" title="https://john-betong.tk/home/home-02">home-02</a>
      </li>
      <li>
      	<a href="https://john-betong.tk/home/home-03" title="https://john-betong.tk/home/home-03">home-03</a>
      </li>
      	<li><a href="https://john-betong.tk/home/home-04" title="https://john-betong.tk/home/home-04">home-04</a></li><li><a href="https://john-betong.tk/home/home-05" title="https://john-betong.tk/home/home-05">home-05</a></li><li><a href="https://john-betong.tk/home/home-06" title="https://john-betong.tk/home/home-06">home-06</a></li><li><a href="https://john-betong.tk/home/home-07" title="https://john-betong.tk/home/home-07">home-07</a></li><li><a href="https://john-betong.tk/home/home-08" title="https://john-betong.tk/home/home-08">home-08</a></li><li><a href="https://john-betong.tk/home/home-09" title="https://john-betong.tk/home/home-09">home-09</a></li><li><a href="https://john-betong.tk/home/home-010" title="https://john-betong.tk/home/home-010">home-010</a></li>    
    </ul>  
  
  <div class="hhh mg6"> 
    <h5 class="fll">
          <span>
      &nbsp; &nbsp;
      <a href="https://validator.w3.org/nu/?showsource=yes&amp;showoutline=yes&amp;doc=https%3A%2F%2Fjohn-betong.tk%2Fhome"> HTML Validator </a> 
      &nbsp; &nbsp;
      <a href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fjohn-betong.tk%2Fhome&amp;profile=css3svg&amp;usermedium=all&amp;warning=1&amp;vextwarning=&amp;lang=en"> Jigsaw CSS Validator </a>
      &nbsp; &nbsp;
      <a href="https://validator.ampproject.org/#url=https%3A%2F%2Fjohn-betong.tk%2Fhome"> AmpProject Validator </a>
    </span>    </h5>
    <h5 class="flr">
      App\Controllers\C_Home::index       ==> v-home    </h5>
  </div>

  	<h1 class="hhh tac mg9"> John_Betong's CI4 Menu  </h1>
    <h2 class="tac"> $menuPaul ==> home    </h2> 
   
    <div class="foot w99 tac bg2 bg5 fg6 lh2">
      <a class="fll fg7 lsn" href="https://validator.w3.org/nu/?showsource=yes&amp;showoutline=yes&amp;doc=https%3A%2F%2Fjohn-betong.tk%2Fhome">
        HTML Validator
      </a>  

      <a class="flr lsn fg7" href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fjohn-betong.tk%2Fhome&amp;profile=css3svg&amp;usermedium=all&amp;warning=1&amp;vextwarning=&amp;lang=en">
        Jigsaw CSS Validator
      </a>  

      Wonderful place for a footer
    </div>
    */
    ?>

</body></html>	