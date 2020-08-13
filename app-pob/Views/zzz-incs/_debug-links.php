<?php declare(strict_types=1);

$aLinks = [
  'builtwithci4'  => 'Built with CI4',
  'myths'         => 'Strict Menu',
  'playground'    => 'Playground',
  'more'          => 'Info',
  'welcome'       => 'Welcome pages',
  'environment'   => 'Localhost',

];
$links = '<ul id="toggleDebugDiv" class="clb z02 dib XXXw99 fss rad bgd XXXflr XXXdib lh2 tal">';
foreach($aLinks as $key => $link ) :
  $links .= <<< ____EOT
    <li> <a href="$key"> $link </a> </li>
____EOT;    
endforeach;
$links .= '</ul>';


?>
<script>
function toggleDebug() {
  var x = document.getElementById("toggleDebugDiv");
  if (x.style.display == "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>

 <button class="fll rad fss" onclick="toggleDebug()">
   MenuXXX
 </button>
 <br>

 <?= $links ?>
