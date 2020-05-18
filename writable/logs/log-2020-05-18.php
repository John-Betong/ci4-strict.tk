<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2020-05-18 21:24:03 --> mysqli::real_connect() expects parameter 6 to be string, null given
#0 /var/www/ci4-strict/system/Database/BaseConnection.php(378): CodeIgniter\Database\MySQLi\Connection->connect(false)
#1 /var/www/ci4-strict/system/Database/BaseConnection.php(644): CodeIgniter\Database\BaseConnection->initialize()
#2 /var/www/ci4-strict/system/Database/BaseBuilder.php(1860): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#3 /var/www/ci4-strict/system/Model.php(446): CodeIgniter\Database\BaseBuilder->get()
#4 /var/www/ci4-strict/app-strict/Controllers/Playground.php(54): CodeIgniter\Model->findAll()
#5 /var/www/ci4-strict/system/CodeIgniter.php(915): App\Controllers\Playground->index()
#6 /var/www/ci4-strict/system/CodeIgniter.php(401): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Playground))
#7 /var/www/ci4-strict/system/CodeIgniter.php(309): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/www/ci4-strict/public_html/index.php(79): CodeIgniter\CodeIgniter->run()
#9 {main}
