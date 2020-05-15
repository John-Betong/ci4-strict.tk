<?php DECLARE(STRICT_TYPES=1); ?>
<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2020-05-15 11:13:06 --> Undefined variable: DEBUG
#0 /var/www/ci4-strict.tk/app-strict/Views/incs/logo-001.php(11): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', '/var/www/ci4-st...', 11, Array)
#1 /var/www/ci4-strict.tk/app-strict/Views/pages/v-bugs-fixed.php(9): require('/var/www/ci4-st...')
#2 /var/www/ci4-strict.tk/system/View/View.php(247): include('/var/www/ci4-st...')
#3 /var/www/ci4-strict.tk/system/Common.php(1088): CodeIgniter\View\View->render('pages/v-bugs-fi...', Array, true)
#4 /var/www/ci4-strict.tk/app-strict/Controllers/C_page.php(45): view('pages/v-bugs-fi...', Array)
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(915): App\Controllers\C_page->index('pages/v-bugs-fi...')
#6 /var/www/ci4-strict.tk/system/CodeIgniter.php(401): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\C_page))
#7 /var/www/ci4-strict.tk/system/CodeIgniter.php(309): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/www/ci4-strict.tk/public_html/index.php(79): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2020-05-15 11:26:54 --> Undefined variable: DEBUG
#0 /var/www/ci4-strict.tk/app-strict/Views/incs/logo-001.php(20): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', '/var/www/ci4-st...', 20, Array)
#1 /var/www/ci4-strict.tk/app-strict/Views/pages/v-bugs-fixed.php(9): require('/var/www/ci4-st...')
#2 /var/www/ci4-strict.tk/system/View/View.php(247): include('/var/www/ci4-st...')
#3 /var/www/ci4-strict.tk/system/Common.php(1088): CodeIgniter\View\View->render('pages/v-bugs-fi...', Array, true)
#4 /var/www/ci4-strict.tk/app-strict/Controllers/C_page.php(45): view('pages/v-bugs-fi...', Array)
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(915): App\Controllers\C_page->index('pages/v-bugs-fi...')
#6 /var/www/ci4-strict.tk/system/CodeIgniter.php(401): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\C_page))
#7 /var/www/ci4-strict.tk/system/CodeIgniter.php(309): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/www/ci4-strict.tk/public_html/index.php(79): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2020-05-15 11:27:29 --> Undefined variable: DEBUG
#0 /var/www/ci4-strict.tk/app-strict/Views/incs/logo-001.php(21): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', '/var/www/ci4-st...', 21, Array)
#1 /var/www/ci4-strict.tk/app-strict/Views/pages/v-bugs-fixed.php(9): require('/var/www/ci4-st...')
#2 /var/www/ci4-strict.tk/system/View/View.php(247): include('/var/www/ci4-st...')
#3 /var/www/ci4-strict.tk/system/Common.php(1088): CodeIgniter\View\View->render('pages/v-bugs-fi...', Array, true)
#4 /var/www/ci4-strict.tk/app-strict/Controllers/C_page.php(45): view('pages/v-bugs-fi...', Array)
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(915): App\Controllers\C_page->index('pages/v-bugs-fi...')
#6 /var/www/ci4-strict.tk/system/CodeIgniter.php(401): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\C_page))
#7 /var/www/ci4-strict.tk/system/CodeIgniter.php(309): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/www/ci4-strict.tk/public_html/index.php(79): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2020-05-15 11:53:01 --> Call to undefined function table()
#0 /var/www/ci4-strict.tk/system/View/View.php(247): include()
#1 /var/www/ci4-strict.tk/system/Common.php(1088): CodeIgniter\View\View->render('pages/v-environ...', Array, true)
#2 /var/www/ci4-strict.tk/app-strict/Controllers/C_page.php(45): view('pages/v-environ...', Array)
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(915): App\Controllers\C_page->index('pages/v-environ...')
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(401): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\C_page))
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(309): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/ci4-strict.tk/public_html/index.php(79): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-05-15 11:56:16 --> CodeIgniter\View\View::main(): Failed opening required '/var/www/ci4-strict.tk/app-strict//Views/incs/fred/php' (include_path='.:/usr/share/php')
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2020-05-15 11:56:34 --> print_r() expects parameter 2 to be bool, string given
#0 /var/www/ci4-strict.tk/app-strict/Views/pages/v-environment.php(52): print_r(Array, '$_SERVER')
#1 /var/www/ci4-strict.tk/system/View/View.php(247): include('/var/www/ci4-st...')
#2 /var/www/ci4-strict.tk/system/Common.php(1088): CodeIgniter\View\View->render('pages/v-environ...', Array, true)
#3 /var/www/ci4-strict.tk/app-strict/Controllers/C_page.php(45): view('pages/v-environ...', Array)
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(915): App\Controllers\C_page->index('pages/v-environ...')
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(401): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\C_page))
#6 /var/www/ci4-strict.tk/system/CodeIgniter.php(309): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /var/www/ci4-strict.tk/public_html/index.php(79): CodeIgniter\CodeIgniter->run()
#8 {main}
