<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2020-07-12 11:29:15 --> Call to undefined function App\Controllers\fred()
#0 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#1 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#2 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-07-12 11:29:41 --> mysqli_connect(): (HY000/1049): Unknown database 'ci4xxx'
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'mysqli_connect(...', '/var/www/ci4-st...', 102, Array)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(102): mysqli_connect('localhost', 'root', 'nana', 'ci4xxx')
#2 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(47): App\Controllers\Playground->isConnected('ci4xxx')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-07-12 11:31:37 --> mysqli_connect(): (HY000/1049): Unknown database 'ci4XXX'
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'mysqli_connect(...', '/var/www/ci4-st...', 101, Array)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(101): mysqli_connect('localhost', 'root', 'nana', 'ci4XXX')
#2 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(47): App\Controllers\Playground->isConnected('ci4')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-07-12 11:32:33 --> syntax error, unexpected 'catch' (T_CATCH)
#0 /var/www/ci4-strict.tk/system/Autoloader/Autoloader.php(297): CodeIgniter\Autoloader\Autoloader->requireFile('/var/www/ci4-st...')
#1 /var/www/ci4-strict.tk/system/Autoloader/Autoloader.php(259): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(872): class_exists('\\App\\Controller...', true)
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(397): CodeIgniter\CodeIgniter->startController()
#6 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-07-12 11:33:29 --> syntax error, unexpected 'echo' (T_ECHO), expecting '{'
#0 /var/www/ci4-strict.tk/system/Autoloader/Autoloader.php(297): CodeIgniter\Autoloader\Autoloader->requireFile('/var/www/ci4-st...')
#1 /var/www/ci4-strict.tk/system/Autoloader/Autoloader.php(259): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(872): class_exists('\\App\\Controller...', true)
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(397): CodeIgniter\CodeIgniter->startController()
#6 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-07-12 11:33:57 --> mysqli_connect(): (HY000/1049): Unknown database 'ci4XXX'
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'mysqli_connect(...', '/var/www/ci4-st...', 101, Array)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(101): mysqli_connect('localhost', 'root', 'nana', 'ci4XXX')
#2 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(47): App\Controllers\Playground->isConnected('ci4')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-07-12 11:37:05 --> mysqli_connect(): (HY000/1045): Access denied for user 'root'@'localhost' (using password: YES)
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'mysqli_connect(...', '/var/www/ci4-st...', 101, Array)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(101): mysqli_connect('localhost', 'root', 'dO033614625035', 'ci4XXX')
#2 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(47): App\Controllers\Playground->isConnected('ci4')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-07-12 11:37:54 --> mysqli_connect(): (HY000/1045): Access denied for user 'root'@'localhost' (using password: YES)
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'mysqli_connect(...', '/var/www/ci4-st...', 101, Array)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(101): mysqli_connect('localhost', 'root', 'dO033614625035', 'ci4XXX')
#2 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(47): App\Controllers\Playground->isConnected('ci4')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-07-12 11:37:54 --> mysqli_connect(): (HY000/1045): Access denied for user 'root'@'localhost' (using password: YES)
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'mysqli_connect(...', '/var/www/ci4-st...', 101, Array)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(101): mysqli_connect('localhost', 'root', 'dO033614625035', 'ci4XXX')
#2 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(47): App\Controllers\Playground->isConnected('ci4')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-07-12 11:37:55 --> mysqli_connect(): (HY000/1045): Access denied for user 'root'@'localhost' (using password: YES)
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'mysqli_connect(...', '/var/www/ci4-st...', 101, Array)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(101): mysqli_connect('localhost', 'root', 'dO033614625035', 'ci4XXX')
#2 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(47): App\Controllers\Playground->isConnected('ci4')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-07-12 11:42:41 --> mysqli_connect(): (HY000/1045): Access denied for user 'root'@'localhost' (using password: YES)
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'mysqli_connect(...', '/var/www/ci4-st...', 101, Array)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(101): mysqli_connect('localhost', 'root', 'dO033614625035', 'ci4XXX')
#2 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(47): App\Controllers\Playground->isConnected('ci4')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/ci4-strict.tk/public_html/index.php(95): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-07-12 11:46:09 --> mysqli_connect(): (HY000/1045): Access denied for user 'root'@'localhost' (using password: YES)
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'mysqli_connect(...', '/var/www/ci4-st...', 101, Array)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(101): mysqli_connect('localhost', 'root', 'dO033614625035', 'ci4XXX')
#2 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(47): App\Controllers\Playground->isConnected('ci4')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/ci4-strict.tk/public_html/index.php(95): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-07-12 11:46:10 --> mysqli_connect(): (HY000/1045): Access denied for user 'root'@'localhost' (using password: YES)
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'mysqli_connect(...', '/var/www/ci4-st...', 101, Array)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(101): mysqli_connect('localhost', 'root', 'dO033614625035', 'ci4XXX')
#2 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(47): App\Controllers\Playground->isConnected('ci4')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/ci4-strict.tk/public_html/index.php(95): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-07-12 11:51:27 --> mysqli_connect(): (HY000/1049): Unknown database 'ci4XXX'
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'mysqli_connect(...', '/var/www/ci4-st...', 101, Array)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(101): mysqli_connect('localhost', 'root', 'nana', 'ci4XXX')
#2 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(47): App\Controllers\Playground->isConnected('ci4')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-07-12 12:04:50 --> mysqli_connect(): (HY000/1049): Unknown database 'ci4XYZ'
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'mysqli_connect(...', '/var/www/ci4-st...', 100, Array)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(100): mysqli_connect('localhost', 'root', 'nana', 'ci4XYZ')
#2 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(47): App\Controllers\Playground->isConnected('ci4')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-07-12 12:05:13 --> mysqli_connect(): (HY000/1049): Unknown database 'ci4XYZ'
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'mysqli_connect(...', '/var/www/ci4-st...', 100, Array)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(100): mysqli_connect('localhost', 'root', 'nana', 'ci4XYZ')
#2 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(47): App\Controllers\Playground->isConnected('ci4')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-07-12 12:05:16 --> {0} filter must have a matching alias defined.
#0 /var/www/ci4-strict.tk/system/Filters/Filters.php(151): CodeIgniter\Filters\Exceptions\FilterException::forNoAlias('toolbar')
#1 /var/www/ci4-strict.tk/system/CodeIgniter.php(425): CodeIgniter\Filters\Filters->run('myths', 'after')
#2 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-07-12 12:05:17 --> {0} filter must have a matching alias defined.
#0 /var/www/ci4-strict.tk/system/Filters/Filters.php(151): CodeIgniter\Filters\Exceptions\FilterException::forNoAlias('toolbar')
#1 /var/www/ci4-strict.tk/system/CodeIgniter.php(425): CodeIgniter\Filters\Filters->run('myths', 'after')
#2 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-07-12 12:05:49 --> {0} filter must have a matching alias defined.
#0 /var/www/ci4-strict.tk/system/Filters/Filters.php(151): CodeIgniter\Filters\Exceptions\FilterException::forNoAlias('toolbar')
#1 /var/www/ci4-strict.tk/system/CodeIgniter.php(425): CodeIgniter\Filters\Filters->run('myths', 'after')
#2 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-07-12 12:05:50 --> {0} filter must have a matching alias defined.
#0 /var/www/ci4-strict.tk/system/Filters/Filters.php(151): CodeIgniter\Filters\Exceptions\FilterException::forNoAlias('toolbar')
#1 /var/www/ci4-strict.tk/system/CodeIgniter.php(425): CodeIgniter\Filters\Filters->run('myths', 'after')
#2 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-07-12 12:06:47 --> mysqli_connect(): (HY000/1049): Unknown database 'ci4XYZ'
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'mysqli_connect(...', '/var/www/ci4-st...', 100, Array)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(100): mysqli_connect('localhost', 'root', 'nana', 'ci4XYZ')
#2 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(47): App\Controllers\Playground->isConnected('ci4')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-07-12 12:07:40 --> mysqli_connect(): (HY000/1049): Unknown database 'ci4XYZ'
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'mysqli_connect(...', '/var/www/ci4-st...', 100, Array)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(100): mysqli_connect('localhost', 'root', 'nana', 'ci4XYZ')
#2 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(47): App\Controllers\Playground->isConnected('ci4')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-07-12 12:07:41 --> mysqli_connect(): (HY000/1049): Unknown database 'ci4XYZ'
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'mysqli_connect(...', '/var/www/ci4-st...', 100, Array)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(100): mysqli_connect('localhost', 'root', 'nana', 'ci4XYZ')
#2 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(47): App\Controllers\Playground->isConnected('ci4')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-07-12 12:07:42 --> mysqli_connect(): (HY000/1049): Unknown database 'ci4XYZ'
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'mysqli_connect(...', '/var/www/ci4-st...', 100, Array)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(100): mysqli_connect('localhost', 'root', 'nana', 'ci4XYZ')
#2 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(47): App\Controllers\Playground->isConnected('ci4')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-07-12 12:08:52 --> mysqli_connect(): (HY000/1049): Unknown database 'ci4XYZ'
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'mysqli_connect(...', '/var/www/ci4-st...', 100, Array)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(100): mysqli_connect('localhost', 'root', 'nana', 'ci4XYZ')
#2 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(47): App\Controllers\Playground->isConnected('ci4')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-07-12 12:08:54 --> mysqli_connect(): (HY000/1049): Unknown database 'ci4XYZ'
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'mysqli_connect(...', '/var/www/ci4-st...', 100, Array)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(100): mysqli_connect('localhost', 'root', 'nana', 'ci4XYZ')
#2 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(47): App\Controllers\Playground->isConnected('ci4')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-07-12 12:13:52 --> A non-numeric value encountered
#0 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(100): CodeIgniter\Debug\Exceptions->errorHandler(2, 'A non-numeric v...', '/var/www/ci4-st...', 100, Array)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(47): App\Controllers\Playground->isConnected('ci4')
#2 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-07-12 12:13:59 --> A non-numeric value encountered
#0 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(100): CodeIgniter\Debug\Exceptions->errorHandler(2, 'A non-numeric v...', '/var/www/ci4-st...', 100, Array)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(47): App\Controllers\Playground->isConnected('ci4')
#2 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-07-12 12:13:59 --> A non-numeric value encountered
#0 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(100): CodeIgniter\Debug\Exceptions->errorHandler(2, 'A non-numeric v...', '/var/www/ci4-st...', 100, Array)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(47): App\Controllers\Playground->isConnected('ci4')
#2 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-07-12 12:14:00 --> A non-numeric value encountered
#0 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(100): CodeIgniter\Debug\Exceptions->errorHandler(2, 'A non-numeric v...', '/var/www/ci4-st...', 100, Array)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(47): App\Controllers\Playground->isConnected('ci4')
#2 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-07-12 12:14:01 --> A non-numeric value encountered
#0 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(100): CodeIgniter\Debug\Exceptions->errorHandler(2, 'A non-numeric v...', '/var/www/ci4-st...', 100, Array)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(47): App\Controllers\Playground->isConnected('ci4')
#2 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-07-12 12:14:36 --> mysqli_connect(): (HY000/1049): Unknown database 'XYZ'
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'mysqli_connect(...', '/var/www/ci4-st...', 100, Array)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(100): mysqli_connect('localhost', 'root', 'nana', 'XYZ')
#2 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(47): App\Controllers\Playground->isConnected('XYZ')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-07-12 12:15:53 --> mysqli_connect(): (HY000/1049): Unknown database 'XYZ'
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'mysqli_connect(...', '/var/www/ci4-st...', 100, Array)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(100): mysqli_connect('localhost', 'root', 'nana', 'XYZ')
#2 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(47): App\Controllers\Playground->isConnected('XYZ')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-07-12 12:16:28 --> mysqli_connect(): (HY000/1049): Unknown database 'XYZ'
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'mysqli_connect(...', '/var/www/ci4-st...', 100, Array)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(100): mysqli_connect('localhost', 'root', 'nana', 'XYZ')
#2 /var/www/ci4-strict.tk/app-strict/Controllers/Playground.php(47): App\Controllers\Playground->isConnected('XYZ')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\Playground->index()
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#7 {main}
