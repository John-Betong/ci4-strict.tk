

Fatal error:  Uncaught TypeError: Argument 2 passed to CodeIgniter\Log\Logger::__construct() must be of the type bool, int given, called in /var/www/ci4-strict.tk/system/Config/Services.php on line 431 and defined in /var/www/ci4-strict.tk/system/Log/Logger.php:150
Stack trace:
#0 /var/www/ci4-strict.tk/system/Config/Services.php(431): CodeIgniter\Log\Logger->__construct(Object(Config\Logger))
#1 /var/www/ci4-strict.tk/system/Config/BaseService.php(124): CodeIgniter\Config\Services::logger(false)
#2 /var/www/ci4-strict.tk/system/Config/Services.php(428): CodeIgniter\Config\BaseService::getSharedInstance('logger')
#3 /var/www/ci4-strict.tk/system/Common.php(724): CodeIgniter\Config\Services::logger(true)
#4 /var/www/ci4-strict.tk/system/Debug/Exceptions.php(155): log_message('critical', 'Argument 2 pass...', Array)
#5 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(TypeError))
#6 {main}
  thrown in /var/www/ci4-strict.tk/system/Log/Logger.php on line 150

\n



Fatal error:  Uncaught TypeError: Argument 2 passed to CodeIgniter\Log\Logger::__construct() must be of the type bool, int given, called in /var/www/ci4-strict.tk/system/Config/Services.php on line 431 and defined in /var/www/ci4-strict.tk/system/Log/Logger.php:150
Stack trace:
#0 /var/www/ci4-strict.tk/system/Config/Services.php(431): CodeIgniter\Log\Logger->__construct(Object(Config\Logger))
#1 /var/www/ci4-strict.tk/system/Config/BaseService.php(124): CodeIgniter\Config\Services::logger(false)
#2 /var/www/ci4-strict.tk/system/Config/Services.php(428): CodeIgniter\Config\BaseService::getSharedInstance('logger')
#3 /var/www/ci4-strict.tk/system/Common.php(724): CodeIgniter\Config\Services::logger(true)
#4 /var/www/ci4-strict.tk/system/Debug/Exceptions.php(155): log_message('critical', 'Uncaught TypeEr...', Array)
#5 /var/www/ci4-strict.tk/system/Debug/Exceptions.php(224): CodeIgniter\Debug\Exceptions->exceptionHandler(Object(ErrorException))
#6 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#7 {main} in /var/www/ci4-strict.tk/system/Log/Logger.php on line 150

\n