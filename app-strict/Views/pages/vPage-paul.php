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
.wrap {
   display: flex; flex-direction: column;
   min-height: 100vh; max-width:1200px;
   margin: auto;
}
.main {flex: 1; display:flex;}
footer, 
header {
   background: #ccc; 
   /* padding: 0.88em; */
   position: sticky;
   position: webkit-sticky;
}
header   {top:0;}
footer   {bottom:0;}
.sidebar {
   background:#f9f9f9;
   background:#8ff;
   flex: 0 0 12em;
   /* padding: 0.88em; */
}
.content {background:#eee;
   padding: 0.88em;
   flex: 1;  
}
/*
@media screen and (max-width:680px){
   .sidebar{flex: 0; order:2; background-color:#eee;}
   .main   {flex-direction: column;}   
}
*/

.content p {margin: 0 auto 4.2em; border: solid 1px #ccc;}

.fll {float: left;} .flr {float: right;}
.ooo {margin: 0; padding: 0;}
.p42 {padding: 0.42em;}
.tac {text-align: center;}
</style>
</head>
<body>

   <!-- could use body element instead of wrap if wanted -->
   <div class="wrap">
     <header>
       <h1 class="ooo">
         Fluid height Header can go here: 
       </h1>
     </header>

     <main class="main">
       <div class="sidebar p42">
         <p>1 Sidebar Start </p>
         <p>2 Sidebar Start </p>
         <p>3 Sidebar Start </p>
         <p>4 Sidebar Start </p>
         <p>5 Sidebar Start </p>
       </div>

       <div class="content">
         <p> Main content Main content Main content Main content </p>
         <p> Main content Main content Main content Main content </p>
         <p> Main content Main content Main content Main content </p>
         <p> Main content Main content Main content Main content </p>
         <p> Main content Main content Main content Main content </p>
         <p> Main content Main content Main content Main content </p>
         <p> Main content Main content Main content Main content </p>
         <p> Main content Main content Main content Main content </p>
       </div>
     </main>

     <footer class="tac p42">
      <b class="fll"> Align Left </b>
      <b class="flr"> Align Right </b>
      <span> Fluid height footer can go here: </span>
     </footer>

   </div>

</body></html>   
<?php exit;

$info = <<< ____EOT
<body>

<header class="tac">
  <?php require APPPATH .'Views/incs/_logo-001.php'; ?>

  <h4 class="ooo"> path: /writable changes </h4>  
</header>

<div id="main">
  <nav> 
    <?php require APPPATH .'Views/incs/menu-001.php' ?>
  </nav>

  <article>
    <h2 class="ooo"> writable Bugs cleared go here </h2>
    <br>
    No PHP files found in ./writable path
<pre>
 
</pre>    
  
 </article>
  </div>
  
  <footer>
    <?php require APPPATH .'Views/incs/_footer.php'; ?>
  </footer>
</body>
</html>
____EOT;
