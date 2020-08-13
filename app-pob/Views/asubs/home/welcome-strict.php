<?php DECLARE(STRICT_TYPES=1);

require APPPATH .'Views/incs/doctype-welcome.php'; 

?>
<body>
	<h2 class="ooo pof fsl z02 z99 w99 bgs"> 
		<a href="<?= base_url('myths'); ?>"> Strict Menu </a>
	</h2> 
	
	<div class="wrap">

		<div class="logo">
			<?= file_get_contents('assets/svg/logo.svg') ?>
		</div>

		<h1>Welcome to <strong>CodeIgniter</strong></h1>

		<p class="version">
			version <?= CodeIgniter\CodeIgniter::CI_VERSION ?>
		</p>

		<div class="guide">
			<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

			<p>If you would like to edit this page you'll find it located at:</p>

			<pre>
				<code>
					app/Views/welcome_message.php
				</code>
			</pre>

			<p>The corresponding controller for this page is found at:</p>

			<pre>
				<code>
					app/Controllers/Home.php
				</code>
			</pre>

			<p>
				If you are exploring CodeIgniter for the very first time, you
				should start by reading the
				<a href="https://codeigniter4.github.io/CodeIgniter4">User Guide</a>.
			</p>
		</div>

		<div class="footer">
			Page rendered in {elapsed_time} seconds. Environment: <?= ENVIRONMENT ?>
		</div>

	</div>
	
	<?php require APPPATH .'Views/incs/footer.php' ?>

	</body>
</html>
