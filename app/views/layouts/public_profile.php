<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=1030, maximum-scale=1.0">
		<title><?= $page_title; ?></title>
		<meta name="description" content="">

		<link rel="shortcut icon" href="<?= URL::to('favicon.ico') ?>">
		<link rel="apple-itouch-icon" href="<?= URL::to('favicon.png') ?>">

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

					<a id="logo" class="navbar-brand" href="/"><img src="<?= asset('images/logo.png') ?>" width="149" height="102" alt=""></a>
				</div>

				<?php /*<div id="user_nav">
					<a href="<?= URL::route('sign-up') ?>" id="sign_up">Sign Up</a><a href="<?= URL::route('login') ?>" id="login">Login</a>
				</div>*/ ?>
			</div>
		</div>

		<!-- Content -->
		<div id="content" class="container">
			<?= $content ?>
		</div>

		<?= $js_vars ?>

		<?php foreach ( $assets['js'] as $file ): ?>
			<script src="<?= URL::route('home', array(), false) . $file ?>"></script>
		<?php endforeach; ?>

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-46633800-1', 'actingbio.com');
			ga('send', 'pageview');
		</script>
	</body>
</html>