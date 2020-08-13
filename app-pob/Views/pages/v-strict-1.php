<?PHP DECLARE(STRICT_TYPES=1);

  $mode   = isset($_GET['mode']) ? $_GET['mode'] : ''; 

# SELECT FUNCTION
  $fff = APPPATH .'Views/strict-tests/fn-strict-1.php';
  if( '0'===$mode || '2'===$mode || '4'===$mode || '6'===$mode ) :
    $fff = APPPATH .'Views/strict-tests/fn-strict-0.php';
  endif;


  $fnHighlight = trim( highlight_file($fff, TRUE) );
  require $fff;

  $a      = 2; 
  $b      = 3;

  # if( (int) $mode % 2):
  if( '4'===$mode || '5'===$mode || '7'===$mode):
    $a = '2'; 
    $b = '3';
  endif;  
  $typeA  = gettype($a);
  $typeB  = gettype($b);
 
  $incStr = file_get_contents($fff);
  $incStr = strpos($incStr, 'strict_types=1') 
          ? '<span class="fgg"> STRICT=1 </span>'  
          : '<span class="fgr"> STRICT=1 </span>'  
          ;
 
  require APPPATH .'Views/strict-tests/get-vars.php';


  echo '<div class="w88 mga">';
    require APPPATH .'Views/strict-tests/table.php';
    echo $blurb;

    echo '<dl class="bgs">' 
        .'<dt class="fsl"> Tests: </dt>'
        .'<dd class="tac dib">' .$tbl .'</dd>'
        .'<dd> &nbsp; </dd>'
        .'</dl>';

    # SHOW ERROR   
      echo isset($render) ? $render : NULL;

      echo $fileTest;
    echo '</div>';
