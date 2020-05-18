<?php DECLARE(STRICT_TYPES=1); ?>
<?php namespace CodeIgniter\Test\Mock;

use CodeIgniter\CodeIgniter;

class MockCodeIgniter extends CodeIgniter
{
	protected function callExit($code)
	{
		// Do not call exit() in testing.
	}
}
