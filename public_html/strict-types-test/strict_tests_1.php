<?php  DECLARE(STRICT_TYPES=1);

echo '<p> &nbsp; </p>';

echo '<div class="w88 mga">';
  echo '<h3 class="ooo tal bgd"> Calling included function </h3>';
  
  echo '<div class="w88 mga bgs">';

    try {
      echo '<div> &nbsp; </div>';
      echo '<h4 class="ooo"> Test #1: passing two <b>integer</b> parameters: </h4>';
      echo '<div class="w88 mga"> echo test(  $x=2, $y=4) = ' 
           . test(  $x=2, $y=4)
           .'</div>';

    } catch (Exception $e) {
      echo '<b> Caught exception: ',  $e->getMessage(), "</b>\n";
    }

    try {
      echo '<div> &nbsp; </div>';
      echo '<h4 class="ooo"> Test #2: passing two <b>float</b> parameters: </h4>';
      echo '<div class="w88 mga "> echo test(  $x=2.22, $y=4.44) = ' 
           . test(  $x=2.22, $y=4.44)
           .'</div>';
    } catch (Exception $e) {
      echo '<b> Caught exception: ',  $e->getMessage(), "</b>\n";
    }

    try {
      echo '<div> &nbsp; </div>';
      echo '<h4 class="ooo"> Test #3: passing two <b>string</b> parameters: </h4>';
      echo '<div class="w88 mga"> echo test(  $x="2", $y="4") = ' 
           . test(  $x="2", $y="4")
           .'</div>';

    } catch (Exception $e) {
      echo '<b> Caught exception: ',  $e->getMessage(), "</b>\n";
    }

  echo '<br><br></div>';
echo '</div>';

