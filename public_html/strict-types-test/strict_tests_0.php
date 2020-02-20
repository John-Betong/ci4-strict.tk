<?php  DECLARE(STRICT_TYPES=0);

echo '<p> &nbsp; </p>';

echo '<dl class="w88 mga">';
  echo '<dt class="fsl fwb"> Calling included function </dt>';
  
  echo '<dd class="w88 mga tal bgs p42">';

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
    echo '<br></dd><dd> &nbsp; </dd>';
  echo '</dl>';
echo '</div>';

