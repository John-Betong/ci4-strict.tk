<?php  DECLARE(STRICT_TYPES=1);

$qq0 = strpos($title, 'types=0') ? '' : 'bgd';
$qq1 = strpos($title, 'types=1') ? '' : 'bgd';
$url = 'https://www.this-is-a-test-to-see-if-it-works.tk/';

echo $hdr = <<< ____EOT
  <!doctype html>
  <html lang="en">
  <head>
  <title> $title </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{$url}favicon.ico">
  <style>
  body {
    background-color:#ddd; color:#333;
    font-size: 88%;
    margin: 0; padding: 0;
  }
  h5 {
    display: inline-block;
    padding: 0.42em; 
    margin:  1em 1em 0.42em; 
    border:  solid 4px #aaa;
    background-color: snow;
  }
  h5 a {color:#00f;}
  .bd1 {border: solid 1px #555;}
  .bgc {background-color: #ccc; color:#00f;}
  .bgd {background-color: #ddd; color:#333;}
  .bgr {background-color: #f00; color:#fff;}
  .bgs {background-color: snow; color:#333;}
  .clb {clear: both;}
  .fgs {color: snow;}
  .fll {float: left;} .flr {float: right;}
  .fss {font-size: small;} .fsl{font-size: large;} 
  .ftr {position: fixed; left: 0; bottom: 0;}
  .fwb {font-weight: 700;}
  .hhh {display:none;}
  .lh2 {line-height:1.88;}
  .LOGO{background-color:#3E82F7;}
  .mga {margin: 0 auto;}
  .ooo {margin: 0; padding: 0;}
  .p42 {padding: 0.42em;}
  .tac {text-align: center;}
  .w88 {width: 88%;} .w99 {width: 99.99%;}
  </style>
  </head>
  <body>

    <div class="fll w99 LOGO">
      <h1 class="fgs"> $title </h1>
      <p> </p>
    </div>  

  <div class="LOGO ooo">
    <div class="hhh tac">
      <h5 class="$qq0">
        <a href="index-strict_types=0.php">
          index-strict_types=0
        </a>  
      </h5>
      <h5 class="XXXclb $qq1">
        <a href="index-strict_types=1.php"> 
          index-strict_types=1
        </a>  
      </h5>
    </div>  
  </div>  
  <p> &nbsp; </p>

  <dl class="w88 mga lh2">
    <dt class="fsl fwb"> 
        A simple test to show the effects of declaring strict_types.
    </dt> 
    <dd class="w88 mga tal bgs p42 fss">
    <br>
<ul>
<li> This main file includes the PHP function test(...) - shown below </li>

<li> Setting: 
    <a href="index-strict_types=0.php">
      <b class="fsl">strict_types=0</b>
    </a> 
    does not show any errors 
</li>
<li> Setting: 
    <a href="index-strict_types=1.php">
      <b class="fsl">strict_types=1</b>
    </a>  
     fails and shows errors 
</li>
<li> Errors apply to this main file <b><i class="fsn">only</i></b> and <b>Fail Fast</b> </li>

<li class="fsl fwb"> Which do you prefer? </li>
</ul>
<br>
</dd>
  </dl>
  <p> &nbsp; </p>

____EOT;
