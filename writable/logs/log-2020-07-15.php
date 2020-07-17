<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2020-07-15 11:03:22 --> syntax error, unexpected ''tests'' (T_CONSTANT_ENCAPSED_STRING)
#0 /var/www/ci4-strict.tk/system/Autoloader/Autoloader.php(297): CodeIgniter\Autoloader\Autoloader->requireFile('/var/www/ci4-st...')
#1 /var/www/ci4-strict.tk/system/Autoloader/Autoloader.php(259): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Config\\Database')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Config\\Database')
#3 /var/www/ci4-strict.tk/system/Debug/Toolbar/Collectors/Database.php(101): spl_autoload_call('Config\\Database')
#4 /var/www/ci4-strict.tk/system/Debug/Toolbar.php(97): CodeIgniter\Debug\Toolbar\Collectors\Database->__construct()
#5 /var/www/ci4-strict.tk/system/Config/Services.php(857): CodeIgniter\Debug\Toolbar->__construct(Object(Config\Toolbar))
#6 /var/www/ci4-strict.tk/system/Config/BaseService.php(124): CodeIgniter\Config\Services::toolbar(Object(Config\Toolbar), false)
#7 /var/www/ci4-strict.tk/system/Config/Services.php(849): CodeIgniter\Config\BaseService::getSharedInstance('toolbar', NULL)
#8 /var/www/ci4-strict.tk/system/Filters/DebugToolbar.php(76): CodeIgniter\Config\Services::toolbar()
#9 /var/www/ci4-strict.tk/system/Filters/Filters.php(200): CodeIgniter\Filters\DebugToolbar->after(Object(CodeIgniter\HTTP\IncomingRequest), Object(CodeIgniter\HTTP\Response))
#10 /var/www/ci4-strict.tk/system/CodeIgniter.php(425): CodeIgniter\Filters\Filters->run('/', 'after')
#11 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#12 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#13 {main}
CRITICAL - 2020-07-15 11:17:53 --> Undefined index: builtwith
#0 /var/www/ci4-strict.tk/app-strict/Views/incs/menu-001.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', '/var/www/ci4-st...', 27, Array)
#1 /var/www/ci4-strict.tk/app-strict/Views/incs/menu-001.php(52): getLink(Array, 'builtwith')
#2 /var/www/ci4-strict.tk/app-strict/Views/pages/v-strict-0.php(39): require('/var/www/ci4-st...')
#3 /var/www/ci4-strict.tk/system/View/View.php(247): include('/var/www/ci4-st...')
#4 /var/www/ci4-strict.tk/system/Common.php(1116): CodeIgniter\View\View->render('pages/v-strict-...', Array, true)
#5 /var/www/ci4-strict.tk/app-strict/Controllers/C_page.php(45): view('pages/v-strict-...', Array)
#6 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\C_page->index('pages/v-strict-...')
#7 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\C_page))
#8 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2020-07-15 11:17:58 --> Undefined index: builtwith
#0 /var/www/ci4-strict.tk/app-strict/Views/incs/menu-001.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', '/var/www/ci4-st...', 27, Array)
#1 /var/www/ci4-strict.tk/app-strict/Views/incs/menu-001.php(52): getLink(Array, 'builtwith')
#2 /var/www/ci4-strict.tk/app-strict/Views/pages/v-strict-0.php(39): require('/var/www/ci4-st...')
#3 /var/www/ci4-strict.tk/system/View/View.php(247): include('/var/www/ci4-st...')
#4 /var/www/ci4-strict.tk/system/Common.php(1116): CodeIgniter\View\View->render('pages/v-strict-...', Array, true)
#5 /var/www/ci4-strict.tk/app-strict/Controllers/C_page.php(45): view('pages/v-strict-...', Array)
#6 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\C_page->index('pages/v-strict-...')
#7 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\C_page))
#8 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2020-07-15 11:19:30 --> Undefined index: builtwith
#0 /var/www/ci4-strict.tk/app-strict/Views/incs/menu-001.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', '/var/www/ci4-st...', 27, Array)
#1 /var/www/ci4-strict.tk/app-strict/Views/incs/menu-001.php(52): getLink(Array, 'builtwith')
#2 /var/www/ci4-strict.tk/app-strict/Views/pages/v-strict-0.php(39): require('/var/www/ci4-st...')
#3 /var/www/ci4-strict.tk/system/View/View.php(247): include('/var/www/ci4-st...')
#4 /var/www/ci4-strict.tk/system/Common.php(1116): CodeIgniter\View\View->render('pages/v-strict-...', Array, true)
#5 /var/www/ci4-strict.tk/app-strict/Controllers/C_page.php(45): view('pages/v-strict-...', Array)
#6 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\C_page->index('pages/v-strict-...')
#7 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\C_page))
#8 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2020-07-15 11:19:45 --> Undefined index: builtwith
#0 /var/www/ci4-strict.tk/app-strict/Views/incs/menu-001.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', '/var/www/ci4-st...', 27, Array)
#1 /var/www/ci4-strict.tk/app-strict/Views/incs/menu-001.php(52): getLink(Array, 'builtwith')
#2 /var/www/ci4-strict.tk/app-strict/Views/pages/v-strict-0.php(39): require('/var/www/ci4-st...')
#3 /var/www/ci4-strict.tk/system/View/View.php(247): include('/var/www/ci4-st...')
#4 /var/www/ci4-strict.tk/system/Common.php(1116): CodeIgniter\View\View->render('pages/v-strict-...', Array, true)
#5 /var/www/ci4-strict.tk/app-strict/Controllers/C_page.php(45): view('pages/v-strict-...', Array)
#6 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\C_page->index('pages/v-strict-...')
#7 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\C_page))
#8 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2020-07-15 11:19:51 --> Undefined index: builtwith
#0 /var/www/ci4-strict.tk/app-strict/Views/incs/menu-001.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', '/var/www/ci4-st...', 27, Array)
#1 /var/www/ci4-strict.tk/app-strict/Views/incs/menu-001.php(52): getLink(Array, 'builtwith')
#2 /var/www/ci4-strict.tk/app-strict/Views/pages/v-strict-0.php(39): require('/var/www/ci4-st...')
#3 /var/www/ci4-strict.tk/system/View/View.php(247): include('/var/www/ci4-st...')
#4 /var/www/ci4-strict.tk/system/Common.php(1116): CodeIgniter\View\View->render('pages/v-strict-...', Array, true)
#5 /var/www/ci4-strict.tk/app-strict/Controllers/C_page.php(45): view('pages/v-strict-...', Array)
#6 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\C_page->index('pages/v-strict-...')
#7 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\C_page))
#8 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2020-07-15 11:21:41 --> Undefined index: builtwith
#0 /var/www/ci4-strict.tk/app-strict/Views/incs/menu-001.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', '/var/www/ci4-st...', 27, Array)
#1 /var/www/ci4-strict.tk/app-strict/Views/incs/menu-001.php(52): getLink(Array, 'builtwith')
#2 /var/www/ci4-strict.tk/app-strict/Views/pages/v-strict-0.php(39): require('/var/www/ci4-st...')
#3 /var/www/ci4-strict.tk/system/View/View.php(247): include('/var/www/ci4-st...')
#4 /var/www/ci4-strict.tk/system/Common.php(1116): CodeIgniter\View\View->render('pages/v-strict-...', Array, true)
#5 /var/www/ci4-strict.tk/app-strict/Controllers/C_page.php(45): view('pages/v-strict-...', Array)
#6 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\C_page->index('pages/v-strict-...')
#7 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\C_page))
#8 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2020-07-15 11:53:18 --> syntax error, unexpected '<'
#0 /var/www/ci4-strict.tk/system/Common.php(1116): CodeIgniter\View\View->render('pages/v-builtwi...', Array, true)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/C_page.php(45): view('pages/v-builtwi...', Array)
#2 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\C_page->index('pages/v-builtwi...')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\C_page))
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-07-15 11:54:53 --> syntax error, unexpected 'assets' (T_STRING), expecting ',' or ';'
#0 /var/www/ci4-strict.tk/system/Common.php(1116): CodeIgniter\View\View->render('pages/v-builtwi...', Array, true)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/C_page.php(45): view('pages/v-builtwi...', Array)
#2 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\C_page->index('pages/v-builtwi...')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\C_page))
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-07-15 11:54:53 --> syntax error, unexpected 'assets' (T_STRING), expecting ',' or ';'
#0 /var/www/ci4-strict.tk/system/Common.php(1116): CodeIgniter\View\View->render('pages/v-builtwi...', Array, true)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/C_page.php(45): view('pages/v-builtwi...', Array)
#2 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\C_page->index('pages/v-builtwi...')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\C_page))
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-07-15 11:55:03 --> syntax error, unexpected 'assets' (T_STRING), expecting ',' or ';'
#0 /var/www/ci4-strict.tk/system/Common.php(1116): CodeIgniter\View\View->render('pages/v-builtwi...', Array, true)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/C_page.php(45): view('pages/v-builtwi...', Array)
#2 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\C_page->index('pages/v-builtwi...')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\C_page))
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-07-15 11:56:03 --> syntax error, unexpected 'fll' (T_STRING), expecting ',' or ';'
#0 /var/www/ci4-strict.tk/system/Common.php(1116): CodeIgniter\View\View->render('pages/v-builtwi...', Array, true)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/C_page.php(45): view('pages/v-builtwi...', Array)
#2 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\C_page->index('pages/v-builtwi...')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\C_page))
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-07-15 11:59:48 --> Call to undefined function fred()
#0 /var/www/ci4-strict.tk/system/View/View.php(247): include()
#1 /var/www/ci4-strict.tk/system/Common.php(1116): CodeIgniter\View\View->render('pages/v-builtwi...', Array, true)
#2 /var/www/ci4-strict.tk/app-strict/Controllers/C_page.php(45): view('pages/v-builtwi...', Array)
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\C_page->index('pages/v-builtwi...')
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\C_page))
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-07-15 12:03:04 --> syntax error, unexpected '{', expecting ')'
#0 /var/www/ci4-strict.tk/system/Common.php(1116): CodeIgniter\View\View->render('pages/v-builtwi...', Array, true)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/C_page.php(45): view('pages/v-builtwi...', Array)
#2 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\C_page->index('pages/v-builtwi...')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\C_page))
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-07-15 12:07:11 --> syntax error, unexpected 'src' (T_STRING), expecting ',' or ';'
#0 /var/www/ci4-strict.tk/system/Common.php(1116): CodeIgniter\View\View->render('pages/v-builtwi...', Array, true)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/C_page.php(45): view('pages/v-builtwi...', Array)
#2 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\C_page->index('pages/v-builtwi...')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\C_page))
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-07-15 12:07:11 --> syntax error, unexpected 'src' (T_STRING), expecting ',' or ';'
#0 /var/www/ci4-strict.tk/system/Common.php(1116): CodeIgniter\View\View->render('pages/v-builtwi...', Array, true)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/C_page.php(45): view('pages/v-builtwi...', Array)
#2 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\C_page->index('pages/v-builtwi...')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\C_page))
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-07-15 12:07:31 --> syntax error, unexpected '/'
#0 /var/www/ci4-strict.tk/system/Common.php(1116): CodeIgniter\View\View->render('pages/v-builtwi...', Array, true)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/C_page.php(45): view('pages/v-builtwi...', Array)
#2 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\C_page->index('pages/v-builtwi...')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\C_page))
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-07-15 12:07:48 --> syntax error, unexpected '$link' (T_VARIABLE), expecting ',' or ';'
#0 /var/www/ci4-strict.tk/system/Common.php(1116): CodeIgniter\View\View->render('pages/v-builtwi...', Array, true)
#1 /var/www/ci4-strict.tk/app-strict/Controllers/C_page.php(45): view('pages/v-builtwi...', Array)
#2 /var/www/ci4-strict.tk/system/CodeIgniter.php(921): App\Controllers\C_page->index('pages/v-builtwi...')
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(407): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\C_page))
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(315): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /var/www/ci4-strict.tk/public_html/index.php(96): CodeIgniter\CodeIgniter->run()
#6 {main}
