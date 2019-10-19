<?php DECLARE(STRICT_TYPES=1);

$strictPath = BASEURL;

$nob  = '<tr class="nob">'
      . '  <td> &nbsp; </td><td> </td><td> '
      . '  </td><td> </td> <td> </td> <td> </td></tr>';

# $pInt = 'test(1, 1 )'; 
$pInt = 'test(2, 3)';
$pStr = 'test("2","3")';

$tbl = <<< ____EOT
  <table class="dib XXXfss tac">
  <tr class="bge">
    <th> Test(...)  </th>
    <th> Parent     </th>
    <th> included   </th>
    <th> Result     </th>
    <th> Type       </th>
  </tr>

  <tr> <!-- 0,1,2,3 -->
    <td> <a href="{$strictPath}strict-0?mode=0">$pInt</a> </td>
    <td  class="fgr fss"> not declared </td>
    <td  class="fgr fss"> not declared </td>
    <td> {$result[0]} </td>
    <td> {$retype[0]} </td>
  </tr>
  <tr>
    <td> <a href="{$strictPath}strict-0?mode=1">$pInt</a> </td>
    <td class="fgr fss"> not declared </td>
    <td class="fgg"> Strict=1 </td>
    <td> {$result[1]}   </td>
    <td> {$retype[1]}   </td>
  </tr>
  <tr>
    <td> <a href="{$strictPath}strict-0?mode=2">$pInt</a> </td>
    <td class="fgg"> Strict=1 </td>
    <td class="fgr fss"> not declared </td>
    <td> {$result[2]} </td>
    <td> {$retype[2]} </td>
  </tr>
  <tr>
    <td> <a href="{$strictPath}strict-0?mode=3">$pInt</a> </td>
    <td class="fgg"> Strict=1 </td>
    <td class="fgg"> Strict=1 </td>
    <td> {$result[3]} </td>
    <td> {$retype[3]} </td>
  </tr>
  $nob

  <tr><!-- 4,5, 6 -->
    <td> <a href="{$strictPath}strict-1?mode=4"> $pStr </a> </td>
    <td class="fgr fss"> not declared </td>
    <td class="fgr fss"> not declared </td>
    <td> {$result[4]} </td>
    <td> {$retype[4]} </td>
  </tr>
  <tr> 
    <td> <a href="{$strictPath}strict-1?mode=6"> $pStr </a> </td>
    <td class="fgg"> Strict=1 </td>
    <td class="fgr fss"> not declared </td>
    <td> {$result[6]} </td>
    <td> {$retype[6]} </td>
  </tr>
  $nob
  
  <tr> 
    <td> <a href="{$strictPath}strict-1?mode=5"> $pStr </a> </td>
    <td class="fgr fss"> not declared </td>
    <td class="fgg"> Strict=1 </td>
    <td> {$result[5]} </td>
    <td> {$retype[5]} </td>
  </tr>
  <tr> 
    <td> <a href="{$strictPath}strict-1?mode=7"> $pStr </a> </td>
    <td class="fgg"> Strict=1 </td>
    <td class="fgg"> Strict=1 </td>
    <td> {$result[7]} </td>
    <td> {$retype[7]} </td>
  </tr>

  </table>
____EOT;

$pos  = strpos( file_get_contents($fff), 'types=1' );
$clr  = $pos ? 'fgg' : 'fgr';
$bdr  = $pos ? 'bd2' : 'bd3';

$tmp  = strstr($fff, 'strict-tests/', ! TRUE);
$fffX = substr($tmp, 13);
$fileTest = <<< ____EOT
    <dl class="hg7"> 
      <dt class="fwb fsl"> 
        Included file: 
        <span class="$clr">$fffX &nbsp;&nbsp;</span>
      </dt>
      <dd>
      <pre class="dib bgs bd1 p42 $bdr $clr bge">$fnHighlight</pre>
      </dd>
    </dl>  
____EOT;

$blurb= <<< ____EOT
  <h2 class="ooo"> Examples of using DECLARE(STRICT_TYPES=1); </h2>
  <dl class="w88 mga fss"> 
    <dt> Points to note: </dt>
    <dd>
    <ol>
      <li> this <b>"parent"</b> file includes a file with either:
        <ul>
        <li class="fgr"> 
          strict not set  - (fn-strict-0.php) 
          <br>
          function parameter type declarations <b> NOT SET </b>
        </li>
        <li class="fgg"> 
          strict set  - (fn-strict-1.php)   
          <br>
          function parameter type declarations <b>SET </b>
        </li>
        </ul>
      </li>  
      <li> selecting <b>Test</b> calls the relevant file and the function test(...)
      <li> Results are shown  in the table</li>
    </ol>
  </dd>
  <dd> &nbsp; </dd>
  </dl>
____EOT;


