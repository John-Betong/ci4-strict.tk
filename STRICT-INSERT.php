<?php DECLARE(STRICT_TYPES=1);

  $path   = ['app_srict', 'app', 'public', 'system', 'writable'] ; 
# $path   = ['system', 'writable'] ; 

  $link   = '<h2 class="flr">show: <a href="?strict">CI4_Strict</a> &nbsp; </h2>';
  $title  = 'CodeIgniter4';
  if(0 && isset($_GET['strict']) ):
    $path   = ['app-strict', 'public_html'] ; 
    $link   = '<h2 class="flr">show: <a href="?">CodeIgniter4</a> &nbsp; </h2>';
    $title  = 'CI4_strict';
  endif;  

  $notByref   = [];
  $doneByref  = [];
  foreach($path as $id => $path) :
    $aff = scandir_through($dir=$path) ;
    foreach($aff as $id => $ff) :
      if( is_dir($ff) ):
        // DO NOTHING
      else:
        fnAddStrictTypes($ff, $doneByref, $notByref);
      endif;
    endforeach;    
  endforeach;    

  $phpNot   = count($notByref);
  $phpDone  = count($doneByref);
  $phpTot   = $phpNot  + $phpDone;
  if($phpTot):
    $phpPer   = number_format(100 * $phpDone / $phpTot, 2);
  endif;  

?><!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1"> 
<title> $title </title>
<style>
  body {background-color: #ccd; color: #00a;}
  h1,h2{margin: 0; padding: 0; display: inline-block;}
  h2   {font-size: 0.88em;}
  dt   {font-weight:700;}
  .bgc {background-color: #ccc;}
  .bgd {background-color: #ddd;}
  .bge {background-color: #eee;}
  .bgs {background-color: snow;}
  .bgy {background-color: #ffa;}
  .bd1 {border: solid 1px #ddd;}
  .dib {display: inline-block;}
  .flr {float:right;}
  .fwb {font-weight: 700;}
  .h99 {height: 100%; min-height: 32em;}
  .mga {margin:0 auto;}
  .p42 {padding: 0.42em 2em 0.42em 0;}
  .tac {text-align:center;} .tal {text-align: left;}
  .w88 {width: 88%;  max-width:1024px;}
</style>
</head>
<body>  

<?php
  echo $top = <<< ____EOT
    <h1> $title </h1>
    $link
    <div class="tac">
      <dl class="dib tal bgs p42">
      <dt> Source: CodeIgniter4 </dt>
      <dd>
        sudo git clone https://github.com/codeigniter4/CodeIgniter4.git 
      </dd>
      <dd> <b>Build:</b> 2c04e1c </dd>
      <dd> &nbsp; </dd>

      <dt> Source: John-Betong/ci4-strict </dt>
      <dd>
        sudo git clone https://github.com/John-Betong/ci4-strict.git
      </dd>
      <dd> &nbsp; </dd>
____EOT;

  echo '<dt>NOT PHP files: ' .count($notByref) .'</dt>';
  echo '<dd class="w88 p42">';
    echo fredLink($notByref);
  echo '<dd><dd>&nbsp;</dd>';  
  echo '<dt>Strict_types=1 inserted into PHP files: ' .count($doneByref) .'</dt>';
  echo '<dd class="w88 p42">'; echo fredLink($doneByref); echo '</dd><dd>&nbsp;</dd></dl>';
  echo '<div class="tac">';

//========================================================
function fnAddStrictTypes
(
  string   $fName,
  array  & $doneByref,
  array  & $notByref
)
{
  if( strpos($fName, '.php') ) :
    $doneByref[] = $fName;

    $fContents = file_get_contents($fName) ;
    if( strpos( $fContents, 'DECLARE(STRICT_TYPES=1') ) :
      # $ffByref[] = '<br> ALREADY REPLACED: ==> ' .$fName;
    else:
      $cntByRef = 0;
      $fContents = str_replace
        (
          '<?php', '<?php DECLARE(STRICT_TYPES=1); ', $fContents, $cntByRef
        );  
      # ONCE_ONLY???
      if(1 || $cntByRef > 1) :
         $fNew = file_get_contents($fName) ; 
         fred($fName, 'MULTIPLE'); 
         fred(strlen($fNew), 'strlen($fNew)');
         $fNew  = '<?php DECLARE(STRICT_TYPES=1); ?>'
                . "\n" 
                . $fNew;
         fred(strlen($fNew), 'AGAIN ==> strlen($fNew)');
         $ok    = file_put_contents($fName, $fNew) ;      
         fred($ok, 'Just file_put_contents(...)' .$fName);
      else:  
        $ok = file_put_contents($fName, $fContents) ;
        echo '<br> REPLACED: ' .$fName; die;
      endif;  
    endif;  

  else:
    $notByref[] = $fName;
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
function fred
(
  $val='', 
  string $title=NULL
)
:string // $result
{
  $prn      = print_r($val, TRUE);

  $style = 'border: solid 1px #000; line-height:2.42;'
         . 'padding: 0.42em; background-color:#efe; color: #000;';

  $result = <<< ____EOT
    <div style="$style">$title 
      <pre>$prn </pre>
    </div>
____EOT;

  $result = <<< ____EOT
    <pre style="$style">$prn </pre>
____EOT;

  return $result;
}//


//====== DEBUG ===========================================
function fredLink(
  $val='', 
  string $title=NULL
)
:string // $result
{
  $prn      = print_r($val, TRUE);
  $prn      = '';
  $github   = 'https://github.com/';
  $ci4      = $github .'codeigniter4/CodeIgniter4/blob/develop/';
  $pub_html = $github .'John-Betong/ci4-strict/blob/master/';

  foreach($val as $key => $fileName):
    $prefix = $ci4;
    if(isset($_GET['strict'])):
      $prefix = $pub_html;
    endif;  
    $prn .= '<a 
              href="' .$prefix .$fileName .'"">' 
          .  $fileName 
          .'</a><br>';
  endforeach;  

  $style = 'border: solid 1px #000; line-height:2.42;'
         . 'padding: 0.42em; background-color:#efe; color: #000;';

  $result = <<< ____EOT
    <div style="$style">
      <pre>$prn </pre>
    </div>
____EOT;

  $result = <<< ____EOT
    <pre style="$style">$prn </pre>
____EOT;

  return $result;
}//
