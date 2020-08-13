<?php 
declare(strict_types=1);

  $url    = $_SERVER['REQUEST_SCHEME'] 
          . '://'
          . $_SERVER['SERVER_NAME'] 
          . $_SERVER['REQUEST_URI'] 
          ; 
  $vEnc   = urlencode ($url) ;

# FLOAT RIGHT
  $vCss   = '<a href="'
          .   'https://jigsaw.w3.org/css-validator/validator?uri='
          .     $vEnc
          .   '&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en"'
          . '>CSS: Validator'
          . '</a>'
          ;

# FLOAT LEFT
  $vHtml  = 'https://validator.w3.org/nu/?doc=' .$vEnc ;
  $vHtml  = '<a href="' .$vHtml .'"> HTML: Validator </a>' ;
  


  $FOOTER = '
    z-index: 123456;
    position:fixed; bottom:0; left:0;
    width:100%; 
    text-align:center; 
    background-color:#ddd; 
    border:solid 1px #ccc;';

  $msg  = '<strong> Wonderful place for a footer </strong>';
  $ftr  = "
    <p> <br> <br> <br> </p>

    <div style='$FOOTER'>
      <strong style='float: left'> $vHtml </strong>
      <strong style='float: right'> $vCss  </strong>
      $msg
    </div>  
";
  echo $ftr;