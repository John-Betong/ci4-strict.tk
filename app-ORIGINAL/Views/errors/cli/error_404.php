<?php DECLARE(STRICT_TYPES=1); ?>
<?php
use CodeIgniter\CLI\CLI;

CLI::error('ERROR: ' . $code);
CLI::write($message);
CLI::newLine();
