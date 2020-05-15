<?php DECLARE(STRICT_TYPES=1);

?><!DOCTYPE HTML><html ⚡>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<link rel="canonical" href="/static/samples/standalone/amp-website.html">
<title>AMP Website Demo</title>
<script async src="https://cdn.ampproject.org/v0.js"></script>
<style amp-custom> 
html, body {
  color: #212529;
  font-family: "-apple-system", BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
  font-size: 16px;
  margin: 0;
  padding: 0;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-rendering: optimizeLegibility;
}
header {
  background-color: #f7f8f9;
  border-bottom: 1px solid rgba(242, 242, 242, 1);
}
header ul {
  border-bottom: 1px solid rgba(242, 242, 242, 1);
  list-style-type: none;
  margin: 0;
  overflow: hidden;
  padding: 0;
  text-align: right;
}
header li {
  display: inline-block;
}
header li a {
  color: rgba(0,0,0,.5);
  display: block;
  height: 38px;
  line-height: 36px;
  padding: .8rem 0;
  text-align: center;
  text-decoration: none;
}
header li a:hover {
  color: rgba(221, 72, 20, 1);
}
header li.menu-item a {
  border-radius: 5px;
  margin: 5px 10px;
  -webkit-transition: background-color 300ms ease, color 300ms ease;
  -o-transition: background-color 300ms ease, color 300ms ease;
  transition: background-color 300ms ease, color 300ms ease;
}
header .logo {
  float: left;
  padding: 0 .5rem;
}
header .menu-toggle {
  display: none;
  float: right;
  font-size: 2rem;
  font-weight: bold;
}
header .menu-toggle a {
  background-color: rgba(221, 72, 20, .2);
  border-radius: 5px;
  cursor: pointer;
  font-size: 1.2rem;
  height: 32px;
  line-height: 28px;
  padding: .3rem .75rem;
  margin: 18px 0;
  -webkit-transition: background-color 300ms ease, color 300ms ease;
  -o-transition: background-color 300ms ease, color 300ms ease;
  transition: background-color 300ms ease, color 300ms ease;
}
header .menu-toggle a:hover {
  background-color: rgba(221, 72, 20, .4);
}
header .heroe {
  margin: 0 auto;
  max-width: 1100px;
  padding: 1rem 1.75rem 1.75rem 1.75rem;
}
header .heroe h1 {
  font-size: 2.5rem;
  font-weight: 500;
}
header .heroe h2 {
  font-size: 1.5rem;
  font-weight: 300;
}
section {
  margin: 0 auto;
  max-width: 1100px;
  padding: 2.5rem 1.75rem;
}
section pre {
  background-color: #f7f8f9;
  border: 1px solid rgba(242, 242, 242, 1);
  display: block;
  font-size: .9rem;
  margin: 2rem 0;
  padding: 1rem 1.5rem;
  white-space: pre-wrap;
  word-break: break-all;
}
section code {
  display: block;
}
section a {
  color: rgba(221, 72, 20, 1);
}
footer {
  background-color: rgba(221, 72, 20, 1);
  font-weight: 300;
  text-align: center;
}
footer .environment {
  color: rgba(255, 255, 255, 1);
  padding: 2rem 1.75rem;
}
footer .copyrights {
  background-color: rgba(255, 255, 255, 1);
  color: rgba(119, 119, 119, 1);
  font-size: .8rem;
  padding: .25rem 1.75rem;
}
@media (max-width: 559px) {
  header ul {
    padding: 0;
  }
  header .menu-toggle {
    padding: 0 1rem;
  }
  header .menu-item {
    background-color: rgba(244, 245, 246, 1);
    border-top: 1px solid rgba(242, 242, 242, 1);
    width: 100%;
  }
  header .menu-toggle {
    display: block;
  }
  header .hidden {
    display: none;
  }
  header li.menu-item a {
    background-color: rgba(221, 72, 20, .2);
  }
  header li.menu-item a:hover {
    background-color: rgba(221, 72, 20, .4);
  }
}
.logo:hover {opacity:0.99;}
.logo {
  height: 50px; width: 39px;
  margin: 0.21em 0 0 1em; padding: 0;
  opacity: 0.21; 
  border:0; 
  z-index: 99;
}
.logo div   {float: right;  background-color: GREEN; display: inline-block;}  
.logo a div {background-color: AQUA; display: inline-block;}  
  </style>
<body>

<!-- HEADER: MENU + HEROE SECTION -->

<header>

  <div class="menu">
    <ul>
        <li class="logo">
          <a href="https://codeigniter.com" title="CodeIgniter.com" target="_blank">
            <?= file_get_contents('assets/svg/logo.svg') ?>
          </a>
        </li>
<!--
 onclick="toggleMenu();"
-->          

      <li class="menu-toggle"><a href="?" target="_self" >&#9776;</a></li>
      <li class="menu-item hidden"><a href="#">Home</a></li>
      <li class="menu-item hidden"><a href="https://codeigniter4.github.io/userguide/" target="_blank">Docs</a></li>
      <li class="menu-item hidden"><a href="https://forum.codeigniter.com/" target="_blank">Community</a></li>
      <li class="menu-item hidden"><a href="https://github.com/codeigniter4/CodeIgniter4/blob/master/CONTRIBUTING.md" target="_blank">Contribute</a></li>
    </ul>
  </div>

  <div class="heroe">

    <h1>Welcome to CodeIgniter <?= CodeIgniter\CodeIgniter::CI_VERSION ?></h1>
    <h2> Using <a href="https://amp.dev/"> AmpProject </a></h2>
    <h3>The small framework with powerful features</h3>
  </div>

  <div class="divider"></div>

</header>

<!-- CONTENT -->

<section>

        <h3>About this page</h3>

  <p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

  <p>If you would like to edit this page you will find it located at:</p>

  <pre><code>app/Views/welcome_message.php</code></pre>

  <p>The corresponding controller for this page can be found at:</p>

  <pre><code>app/Controllers/Home.php</code></pre>

  <p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="https://codeigniter4.github.io/CodeIgniter4" target="_blank">User Guide</a>.</p>

</section>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>

  <div class="environment">

    <p>Page rendered in {elapsed_time} seconds</p>

    <p>Environment: <?= ENVIRONMENT ?></p>

  </div>

  <div class="copyrights">

    <p>&copy; <?= date('Y') ?> CodeIgniter Foundation. Codeigniter is open source project released under the MIT open source licence.</p>

  </div>

</footer>

<!-- SCRIPTS -->
<!--
<script type="text/javascript">
function toggleMenu() {
  var menuItems = document.getElementsByClassName('menu-item');
  for (var i = 0; i < menuItems.length; i ++) {
    var menuItem = menuItems[i];
    menuItem.classList.toggle("hidden");
  }
}
</script>
--> 

<!-- -->

</body>
</html>