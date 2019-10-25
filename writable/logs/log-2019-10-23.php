<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-10-23 17:22:11 --> Invalid file: {0}
#0 /var/www/ci4-strict.tk/system/View/View.php(224): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('bugs-app.php')
#1 /var/www/ci4-strict.tk/system/Common.php(176): CodeIgniter\View\View->render('bugs-app', Array, NULL)
#2 /var/www/ci4-strict.tk/app-strict/Controllers/C_page.php(67): view('bugs-app', Array)
#3 /var/www/ci4-strict.tk/system/CodeIgniter.php(847): App\Controllers\C_page->index('bugs-app')
#4 /var/www/ci4-strict.tk/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\C_page))
#5 /var/www/ci4-strict.tk/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/ci4-strict.tk/public_html/index.php(80): CodeIgniter\CodeIgniter->run()
#7 {main}
