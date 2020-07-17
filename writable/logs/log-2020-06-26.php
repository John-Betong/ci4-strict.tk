<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2020-06-26 09:35:45 --> Cannot modify header information - headers already sent by (output started at /var/www/ci4-strict.tk/app-strict/Config/Events.php:25)
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'Cannot modify h...', '/var/www/ci4-st...', 5, Array)
#1 /var/www/ci4-strict.tk/app-strict/Views/incs/doctype-001.php(5): header('Link: </assets/...')
#2 /var/www/ci4-strict.tk/app-strict/Views/pages/v-bugs-fixed.php(4): require('/var/www/ci4-st...')
#3 /var/www/ci4-strict.tk/system/View/View.php(247): include('/var/www/ci4-st...')
#4 /var/www/ci4-strict.tk/system/Common.php(1088): CodeIgniter\View\View->render('pages/v-bugs-fi...', Array, true)
#5 /var/www/ci4-strict.tk/app-strict/Controllers/C_page.php(45): view('pages/v-bugs-fi...', Array)
#6 /var/www/ci4-strict.tk/system/CodeIgniter.php(924): App\Controllers\C_page->index('pages/v-bugs-fi...')
#7 /var/www/ci4-strict.tk/system/CodeIgniter.php(410): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\C_page))
#8 /var/www/ci4-strict.tk/system/CodeIgniter.php(318): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/ci4-strict.tk/public_html/index.php(82): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2020-06-26 09:35:45 --> Uncaught ErrorException: Cannot modify header information - headers already sent by (output started at /var/www/ci4-strict.tk/app-strict/Config/Events.php:25) in /var/www/ci4-strict.tk/system/Debug/Exceptions.php:165
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'Cannot modify h...', '/var/www/ci4-st...', 165, Array)
#1 /var/www/ci4-strict.tk/system/Debug/Exceptions.php(165): header('HTTP/1.1 500 In...', true, 500)
#2 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(ErrorException))
#3 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
