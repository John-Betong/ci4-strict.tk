<?php 
  declare(strict_types=1);

  $title ='My New QQQ Site';

# OLD_SIT$ES
  $OLD_SITESs = glob('../ind*.*');
  $oldSites  =  "\n" .'<h2> OLD Sites and Versions </h2>' ."\n\n\n";
  $oldSites .= '<ul class="dib lh2">' ."\n";
    foreach($OLD_SITESs as $id => $frm):
     $oldSites .= '<li><a href="' .$frm .'">' .$frm .'</a></li>' ."\n";
    endforeach;  
  $oldSites .='</ul>'  ."\n" ;

# CSS
  $FRAMEWORKs   = [
    'https://purecss.io/' ,
    'https://tachyons.io/',
    'https://picnicss.com/',
    'https://www.muicss.com/',
    'https://github.com/troxler/awesome-css-frameworks',
    'https://unpkg.com/@getbase/base@4.1.3/index.html',
    'https://ajusa.github.io/lit/docs/lit.html',
    'https://www.producthunt.com/posts/unused-css-finder',
    'https://mustard-ui.com/',
    'https://www.purgecss.com/',
  ];
  $frameworks  = "\n" .'<h2> CSS Frameworks to Try </h2>' ."\n\n";
  $frameworks .= '<ul class="dib lh2">' ."\n";
    foreach($FRAMEWORKs as $id => $frm):
     $frameworks .= '<li><a href="' .$frm .'">' .$frm .'</a></li>' ."\n";
    endforeach;  
  $frameworks .='</ul>'  ."\n" ;

# 
  $CSSLINKs = [
    'https://www.keycdn.com/blog/remove-unused-css',
    'https://www.jitbit.com/unusedcss/', 
    'https://unused-css.com/', 
    'https://github.com/purifycss/purifycss', 
    'https://www.purgecss.com/', 
    'https://github.com/uncss/uncss', 
  ];
  $cssLinks   = "\n" .'<h2> CSS Unwanted Classes </h2>' ."\n\n\n";
  $cssLinks  .= '<ul class="dib lh2"> ."\n"';
    foreach($CSSLINKs as $id => $tmp):
      $cssLinks .= '<li><a href="' .$tmp .'">' .$tmp .'</a></li>' ."\n";
    endforeach;  
  $cssLinks .='</ul>'  ."\n";
  
?><!doctype html>
<html lang="en">
<head>
<title> <?= $title ?> </title>
<style>
.bd1 {border: solid 1px #ccc;}  
.clb {clear: both; color:red;}
.dib {display: inline-block;}
.fll {float:left;} .flr {float:right;}
.fss {font-size: small;}
.ftr {position:fixed; left:0; bottom:0;}
.lh2 {line-height:2em;}
.mga {margin:0 auto;}
.pof {position:fixed; left:0; bottom:0;}
.tac {text-align:center;} .tal {text-align:left;}
.w88 {width:88.88%;} .w99 {width:99.99%;}
</style>
<!--
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css"  crossorigin="anonymous">  
-->
  <meta content="<?= $title ?>" property="og:title" />

</head>
<body>
<!--
title: Running PHP in Javascript
-->

  
  <?php 
    echo '<div class="w88 mga tac">';
      echo '<div class="dib tal">';
        echo $oldSites;
          echo '<p> <br><br> </p>';

        echo $frameworks;
          echo '<p> <br><br> </p>';
        echo $cssLinks;
          echo '<p> <br><br> </p>';
      echo '</div>';    
    echo '</div>';    

    require '/var/www/footer.php'; 
  ?>

</body>
</html>