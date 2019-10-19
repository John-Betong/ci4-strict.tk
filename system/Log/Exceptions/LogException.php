<?php DECLARE(STRICT_TYPES=1);  namespace CodeIgniter\Log\Exceptions;

use CodeIgniter\Exceptions\ExceptionInterface;
use CodeIgniter\Exceptions\FrameworkException;

class LogException extends FrameworkException implements ExceptionInterface
{
	public static function forInvalidLogLevel(string $level)
	{
		return new static(lang('Log.invalidLogLevel', [$level]));
	}

}