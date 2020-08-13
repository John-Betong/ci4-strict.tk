<?php DECLARE(STRICT_TYPES=1);

# require APPPATH .'Views/incs/_doctype-001.php'; 

?><!DOCTYPE HTML>
<html lang="en">
<head>
<title> <?= '$title' ?>  </title>
<style>
html {box-sizing: border-box;}
*,
*:before,
*:after {box-sizing: inherit;}
body { 
  font-family: -apple-system, BlinkMacSystemFont, 
  "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
}
html, 
body  {margin:0; padding:0;}

.header,
.sidebar,
.footer    {position: fixed; left: 0; width: 100%;}
.header    {top: 0; background-color: #ddd; height:2em;}
.sidebar   {top:2em; width: 12em; height: 100%; background-color: cyan;}
.content   {margin: 2em auto 4.2em 12em; background-color: snow;}
.content p {margin: 0em auto 4.2em; border: solid 1px #ccc;}
.footer    {bottom: 0; text-align: center; background-color: lime;}
.fll {float: left;} .flr {float: right;}
.ooo {margin: 0; padding: 0;}
.p42 {padding: 0.42em;}
.tac {text-align: center;}
</style>
</head>
<body>

     <div class="header">
       <h1 class="ooo">
         Fluid height Header can go here: 
       </h1>
     </div><!-- header -->

       <div class="sidebar">
         <p> 1 Sidebar Start </p>
         <p> 2 Sidebar Start </p>
         <p> 3 Sidebar Start </p>
         <p> 4 Sidebar Start </p>
         <p> 5 Sidebar Start </p>
       </div>

       <div class="content p42">
         <p> 01 Main content Main content Main content Main content </p>
         <p> 02 Main content Main content Main content Main content </p>
         <p> 03 Main content Main content Main content Main content </p>
         <p> 04 Main content Main content Main content Main content </p>
         <p> 05 Main content Main content Main content Main content </p>
         <p> 06 Main content Main content Main content Main content </p>
         <p> 07 Main content Main content Main content Main content </p>
         <p> 08 Main content Main content Main content Main content </p>
       </div>
     <!-- /main -->

     <div class="footer tac p42">
      <?= $footer ?> 
     </div>

</body></html> 
