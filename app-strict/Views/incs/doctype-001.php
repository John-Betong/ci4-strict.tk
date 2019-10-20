<?php DECLARE(STRICT_TYPES=1);

$analytics = CI_DEBUG ? NULL : $analytics;


?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1">
<title> <?= $title ?>  </title>
<!--
<link
  rel="stylesheet" 
  type="text/css" 
  href="//fonts.googleapis.com/css?family=Raleway"
/>
-->
<style>
<?= $style_tla ?> 
/* latin-ext */
@font-face {
  font-family: 'Raleway';
  font-style: normal;
  font-weight: 400;
  src: local('Raleway'), local('Raleway-Regular'), url(https://fonts.gstatic.com/s/raleway/v14/1Ptug8zYS_SKggPNyCMIT5lu.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Raleway';
  font-style: normal;
  font-weight: 400;
  src: local('Raleway'), local('Raleway-Regular'), url(https://fonts.gstatic.com/s/raleway/v14/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}


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