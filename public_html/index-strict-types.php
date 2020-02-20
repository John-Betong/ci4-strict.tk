<?php DECLARE(STRICT_TYPES=1);
error_reporting(-1);
ini_set('display_errors', '1');

chdir('../strict-types-test/');
echo getcwd();
die;
require 'index.php';