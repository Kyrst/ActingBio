<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?= $page_title; ?></title>
		<meta name="description" content="">

		<?php foreach ( $assets['css'] as $css ): ?>
			<link href="<?= URL::route('home', array(), false) . $css['file'] ?>" rel="stylesheet">
		<?php endforeach; ?>
	</head>
	<body>
		<div id="nav" class="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a id="logo" class="navbar-brand" href="/"><img src="<?= asset('images/logo.png') ?>" width="149" height="102"></a>
				</div>

				<div id="user_nav">
					<a href="<?= URL::route('sign-up') ?>" id="sign_up">Sign Up</a><a href="<?= URL::route('login') ?>" id="login">Login</a>
				</div>
			</div>
		</div>

		<!-- Content -->
		<div id="content">
			<?= $content ?>
		</div>

		<!-- Footer -->
		<div id="footer">
			<div id="footer_border"></div>

			<div class="container">
				<ul id="footer_menu">
					<li><a href="/">About</a></li>
					<li><a href="/">Pricing</a></li>
					<li><a href="/">Blog</a></li>
					<li><a href="/">Help</a></li>
					<li><a href="/">Contact</a></li>
					<li><a href="/">Privacy</a></li>
					<li><a href="/">Twitter</a></li>
					<li><a href="/">Facebook</a></li>
				</ul>
			</div>
		</div>

		<?php if ( count($js_vars) > 0 ): ?>
			<script>
				<?php foreach ( $js_vars as $key => $value ): ?>
					<?php
					if ( is_array($value) )
					{
						echo 'var ', $key, ' = ', json_encode($value), ';';
					}
					else
					{
						echo 'var ', $key, ' = ', (is_numeric($value) ? $value : '\'' . $value . '\''), ';';
					}
					?>
				<?php endforeach; ?>
			</script>
		<?php endif; ?>

		<?php foreach ( $assets['js'] as $file ): ?>
			<script src="<?= URL::route('home', array(), false) . $file ?>"></script>
		<?php endforeach; ?>
	</body>
</html>