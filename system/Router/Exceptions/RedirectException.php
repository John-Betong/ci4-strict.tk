<?php DECLARE(STRICT_TYPES=1); 

namespace CodeIgniter\Router\Exceptions;

/**
 * Redirect exception
 */

class RedirectException extends \Exception
{
	protected $code = 302;
}
