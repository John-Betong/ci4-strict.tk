<?php DECLARE(STRICT_TYPES=1);

define('ONCE_ONLY', 1);

$src = 'http://localhost/ci2/ci4-strict/STRICT-LOG.php';
$src = 'STRICT-LOG.php';
# RENAME STUFF
  $tmpDir = 'public';
  if( is_dir($tmpDir) ) :
    # $ok = rename($tmpDir,'public_html'); 
  endif;
    
# ========================================================
  $path = ['app', 'public_html', 'system', 'writable'] ; 

  $notByref   = [];
  $doneByref  = [];
  $manByref   = [];
  foreach($path as $id => $path) :
    $aff = scandir_through($dir=$path) ;
    foreach($aff as $id => $ff) :
      if( is_dir($ff) ):
        // DO NOTHING
      else:
        fnAddStrictTypes($ff, $doneByref, $manByref, $notByref);
      endif;
    endforeach;    
  endforeach;    

  $phpNot   = count($notByref);
  $phpDone  = count($doneByref);
  $phpMan   = count($manByref);
  $phpTot   = $phpNot  + $phpDone;
  if($phpTot):
    $phpPer   = number_format(100 * $phpDone / $phpTot, 2);
  endif;  

?><!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1"> 
<title> title goes here </title>
<style>
  body {background-color: #ccd; color: #00a;}
  th, 
  td   {
    padding: 0.21em 0.88em; 
    border: solid 1px #ccc;
  }
  .bgc {background-color: #ccc;}
  .bgd {background-color: #ddd;}
  .bge {background-color: #eee;}
  .bgs {background-color: snow;}
  .bd1 {border: solid 1px #ddd;}
  .dib {display: inline-block;}
  .fwb {font-weight: 700;}
  .h99 {height: 100%; min-height: 32em;}
  .mga {margin:0 auto;}
  .p42 {padding: 0.42em;}
  .tac {text-align:center;} .tal {text-align: left;}
  .w88 {width: 88%;  max-width:888px;}
  .w99 {width: 100%; max-width:888px;}
</style>
</head>
<body>  

<?php if(0) : ?>
  <div class="bgs tac bd1 p42">
    <iframe class="w99 h99 tal" src="<?=$src?>"></iframe>
  </div>  
  </body></html>
  <?php exit; ?>
<?php endif; ?>

<?php
  echo $tmp = <<< ____EOT
    <div class="tac">
    <dl class="dib tal bgs">
    <dt> Source: </dt>
    <dd>
      sudo git clone https://github.com/codeigniter4/CodeIgniter4.git 
    </dd><dd> <b>Build: </b> fab833c </dd>
    </dd><dd> &nbsp; </dd>

    <dd> 
    <table class="tac">
    <tr class="bgd"> 
      <th> File type       </th><th> total </th>
      <th> inserted strict </th><th> todo </th>
    </tr>

    <tr>
      <td> Not PHP </td>
      <td> $phpNot </td>
      <td> &nbsp;  </td>
      <td> &nbsp;  </td>
    </tr>

    <tr>
      <td> PHP  </td>
      <td> $phpTot  </td>
      <td> $phpDone </td>
      <td> $phpMan  </td>
    </tr>

    </table>
    <br><br>
    </dd>  
____EOT;

  echo '<dd>';
    fred($notByref,   'NOT PHP files: '                           .count($notByref));
      echo '<br><br><br>';
    fred($manByref,   'PHP files require manual insertion: '      .count($manByref));
      echo '<br><br><br>';
    fred($doneByref,  'Strict_types=1 inserted into PHP files: '  .count($doneByref));
  echo '<dd></dl>';
  echo '<div class="tac">';

//========================================================
function fnAddStrictTypes
(
  string   $fff,
  array  & $doneByref,
  array  & $manByref,
  array  & $notByref
)
{
  # echo $fff;
  #var_dump($fff);
  if( strpos($fff, '.php') ) :
    # exit;
    $ff = file_get_contents($fff) ;

    if( strpos( $ff, 'DECLARE(STRICT_TYPES=1') ) :
      # $ffByref[] = '<br> ALREADY REPLACED: ==> ' .$fff;
      $doneByref[] = $fff;
    else:
      $cntByRef = 0;
      $ff = str_replace
        (
          '<?php', '<?php DECLARE(STRICT_TYPES=1); ', $ff, $cntByRef
        );  // ONCE_ONLY
      if($cntByRef > 1) :
       #$manByref[] = '<br> <b> MANUAL REPLACE REQUIRED: </b>' 
        $manByref[] = $cntByRef 
            . ' ==> '
            . $fff
            ;
      else:  
        $ok = file_put_contents($fff, $ff) ;
        # echo '<br> Replaced: ' .$fff; 
      endif;  
    endif;  

  else:
    $notByref[] = $fff;
    # echo '<p> Nope: '.$fff .'</p>';
  endif;  
}//


//========================================================
function scandir_through($dir)
{
  $items = glob($dir . '/*');

  for ($i = 0; $i < count($items); $i++) {
      if (is_dir($items[$i])) {
          $add   = glob($items[$i] . '/*');
          $items = array_merge($items, $add);
      }
  }

  return $items;
}


//====== DEBUG ===========================================
function fred($val='', $title=NULL)
{
  $prn  = print_r($val, TRUE);

  echo $tmp = <<< ____EOT
  <div class="mga dib bd1 p42 bgs ">
    <b> $title </b>
    <pre>$prn </pre>
  </div>
____EOT;

}//
 