<?php DECLARE(STRICT_TYPES=1);

$analytics = ''; // CI_DEBUG ? NULL : $analytics;

header("Link: </assets/css/style-pob.css>; rel=preload; as=style");


$CSS = base_url() .'/assets/css/style-pob.css'; 

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1">
<title> <?= $titleUrl ?>  </title>
<link rel="stylesheet" href="<?= $CSS ?>" media="screen">
</head>