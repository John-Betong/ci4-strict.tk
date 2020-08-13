<?php DECLARE(strict_types=1); ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex">

	<title>Whoops!</title>

	<link rel="stylesheet" 
		href="https://ci4-strict.tk/assets/css/debug.css" 
		media="screen">

	<style type="text/css">
		<?= preg_replace('#[\r\n\t ]+#', ' ', file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'debug.css')) ?>
	</style>
</head>
<body>

	<div class="container text-center">

		<h1 class="headline">Whoops!</h1>
		<p class="lead">We seem to have hit a snag. Please try again later...</p>
		<h2> or even better... </h2>
		<h2> Post feedback to this 
			<a href="https://forum.codeigniter.com/thread-74919.html">
				thread
			</a>
		</h2>
		<h4> Thank you for your support </h4>

	</div>

</body>
</html>