<?php DECLARE(STRICT_TYPES=1);

$tmpErr = <<< ____EOT

<dl class="dib bd3 fgr p42 bgR tal">
<dt class="fsl"> #1 - Fatal error: </dt>
<dd>
<pre class="fwb fgr p42 bgR tal">
Uncaught TypeError: 
  Argument 1 passed to test() must be of the type integer, string given...
</pre>    
</dd>
</dl>
____EOT;

  $result = array_fill(0, 9, '');
  $retype = array_fill(0, 9, '');

  $redErr = ''; // <strong class="fgr fss">error <sup>#1</sup></strong>';  
  $render = '';

  $mat    = '<strong class="fgg"> Matched </strong>';
  $jug    = '<strong class="fgr"> JUGGLED </strong>';
  $err    = '<strong class="fgF"> ERROR   </strong>';

  switch($mode) :
    case '0' : 
    case '1' : 
    case '2' : 
    case '3' : 
      $result[$mode] = test($a, $b); 
      $retype[$mode] = $mat;
    break;

    case '4' : 
    case '6' : 
      $result[$mode] = test($a, $b); 
      $retype[$mode] = $jug;
      break;

    case '5' : 
    case '7' : 
    case '8' : 
      $result[$mode] = $redErr; $render = $tmpErr; 
      $retype[$mode] = $err;
      break;
  endswitch;

  foreach($result as $id => $tmp) :
    if($tmp) :
      $result[$id] = $tmp; // '<strong class="fgg">  </strong`>';
    else:  
      $result[$id] = ''; // '<strong class="fgg">  </strong>';
    endif;
  endforeach;
