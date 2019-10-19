<?php 
declare(strict_types=1);

# require '/var/www/footer.js';
# exit;

  $url    = $_SERVER['REQUEST_SCHEME'] 
          . '://'
          . $_SERVER['SERVER_NAME'] 
          . $_SERVER['REQUEST_URI'] 
          ; 
  $vEnc   = urlencode ($url) ;

# FLOAT RIGHT
  # $jig    = 'http://jigsaw.w3.org/css-validator/check/referer';
  # $jig2   = '<a href="' .$jig .'"> CSS Validator </a>' ;
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
  

 /* style.css 
  .bot {border: solid 1px #ccc;}
  .fll {float: left;} 
  .flr {float: right;}
  .fss {font-size: small;} 
  .ftr {position: fixed; left:0; bottom:0;} 
  .tac {text-align: center;}
  .w99 {width: 100%;}
*/

// PHP STRINGS HEREDOC Syntax
  $msg  = 'Wonderful place for a footer';
  $wiki = 'https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=6&ved=2ahUKEwjvwq2e0LHkAhVBRY8KHRwQAYwQFjAFegQIARAB&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FGreta_Thunberg&usg=AOvVaw21NdejsloklvSuGIIpDL-U';
  $title = 'Greta Thunberg'; // '<img src="/var/www/ci2/cdn/great-thunberg.jpg" alt="Great Thunberg" />';
  $msg  = 'Support: <a href="' .$wiki .'" title="' .$title .'"> <b>Greta Thunberg </b> </a>';
  $ftr  = <<< ____EOT
    <p> <br> <br> <br> </p>

    <div class="ftr tac w99 XXXfss bgc bd1">
      <b class="fll"> $vHtml </b>
      <b class="flr"> $vCss  </b>
      $msg
    </div>  
____EOT;

  if(0):
    # include '/var/www/ci2/vendor/autoload.php';
    #d($_GET, $_POST, $ftr);
  else:
    echo $ftr;
  endif;    
