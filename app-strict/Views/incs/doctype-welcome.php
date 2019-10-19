<?php DECLARE(STRICT_TYPES=1);

$title = 'CodeIgniter4 welcomes you to a warm and STRICT debugging experience';


  $analytics = <<< ____EOT
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149630114-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-149630114-1');
    </script>
____EOT;
$analytics = ! CI_DEBUG ? NULL : $analytics ;


?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<title> <?= $title ?>  </title>
<link rel="stylesheet" type="text/css" 
  href="//fonts.googleapis.com/css?family=Raleway"
/>
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">   
<style>
<?= file_get_contents(APPPATH . 'Views/incs/style-ci4.min.css'); ?>
<?= file_get_contents(APPPATH . 'Views/incs/style-tla.min.css'); ?>
h1 {
  font-weight: lighter;
  /* letter-spacing: 0.8rem; */
  letter-spacing: 0.2rem;
  font-size: 2.5rem;
  margin-top: 145px;
  margin-bottom: 0;
  color: #222;
  position: relative;
  z-index: 1;
}
h1 b {
  font-family: Raleway; 
  font-weight: 700;
  color: #a00;
}
</style>
  <?= $analytics ?>
</head>