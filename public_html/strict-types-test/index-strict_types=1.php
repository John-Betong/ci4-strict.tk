<?php  DECLARE(STRICT_TYPES=1);
error_reporting(-1);
ini_set('display_errors', '1');

$title = 'Testing: strict_types=1';

require 'strict_header.php';

require 'strict_highlight.php';

require 'strict_function.php';  

require 'strict_tests_1.php';

require '/var/www/footer.php';

echo "\n\n</body></html>";