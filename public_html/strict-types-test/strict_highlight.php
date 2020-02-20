<?php  DECLARE(STRICT_TYPES=1);

$strict_function = highlight_file('strict_function.php', TRUE);

echo $test = <<< ____EOT
  <dl class="w88 mga">
    <dt class="fsl fwb"> <b>Included file:</b> strict-function.php </dt>
    <dd class="bgs p42">
     $strict_function  
    </dd>
  </dl>
____EOT;
