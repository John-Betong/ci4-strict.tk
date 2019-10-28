<?php declare(strict_types=1);

$CMD = <<< ____EOT
  
  sed -i '1s/.*/<?php DECLARE(strict_types=1);/' *.php

____EOT;

$CMD = <<< ____EOT
  find . -type f -name "*.php" -exec sed -i '1s/.*/<?php DECLARE(strict_types=1);/g' {} +
____EOT;

# echo '<br><br>'.getcwd();
# echo '<br><br>'.$CMD;
chdir('app-strict/Views/errors');
echo '<br><br>'.getcwd();
# die;

$result = exec($CMD, $array, $iRtn);

echo '<pre>';
  echo '<br><br> $result ==> '; print_r($result);
  echo '<br><br> $array  ==> '; print_r($array);
  echo '<br><br> $iRtn   ==> '; print_r($iRtn);
echo '</pre>';
