<?php if (!defined('DOCROOT')) exit('No direct script access allowed');
header('X-UA-Compatible: IE=edge,chrome=1');
header('imagetoolbar: false');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="generator" content="<?= \Config::get('foolpod.main.name') ?> <?= \Config::get('foolpod.main.version') ?>" />
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale = 0.5,maximum-scale = 2.0">
		<?= $template['metadata'] ?>

		<title><?= $template['title'] ?></title>
		<link href='<?= Uri::base() ?>' rel='index' title='<?= Preferences::get('ff.gen.website_title') ?>' />
		<link href="<?= Uri::base() ?>assets/bootstrap2/css/bootstrap.min.css?v=<?= \Config::get('foolfuuka.main.version') ?>" rel="stylesheet" type="text/css" />
		<link href="<?= Uri::base() ?>assets/font-awesome/css/font-awesome.css?v=<?= \Config::get('foolfuuka.main.version') ?>" rel="stylesheet" type="text/css" />
		<!--[if lt IE 8]>
			<link href="<?= Uri::base() ?>assets/font-awesome/css/font-awesome-ie7.css?v=<?= \Config::get('foolpod.main.version') ?>" rel="stylesheet" type="text/css" />
		<![endif]-->
		<?php
			foreach($this->fallback_override('style.css', $this->get_config('extends_css')) as $css)
				echo '<link href="'.Uri::base().$css.'"rel="stylesheet" type="text/css" />';
		?>

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<?= Preferences::get('ff.theme.header_code'); ?>

	</head>
	<body class="<?= $this->get_selected_theme_class(array('theme_default')) ?>">
		<div class="container">
			<div class="navbar navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<ul class="nav">
							<li class="dropdown">
								<a href="<?= Uri::base() ?>" id="brand" class="brand">
									<?= \Preferences::get('ff.gen.website_title') ?>
								</a>
							</li>
						</ul>

						<ul class="nav">
						<?php
							$top_nav = array();
							$top_nav = Plugins::run_hook('ff.themes.generic_top_nav_buttons', array($top_nav), 'simple');

							foreach ($top_nav as $nav)
							{
								echo '<li><a href="' . $nav['href'] . '">' . $nav['text'] . '</a></li>';
							}
						?>
						</ul>
					</div>
				</div>
			</div>

			<div role="main" id="main">
				
				<?= $template['body'] ?>

				<?php /* \Plugins::run_hook('fu.themes.default_after_body_template'); */ ?>

			</div> <!-- end of #main -->
			
			<footer id="footer">
			<a href="http://github.com/FoOlRulez/FoOlFrame"><?= \Config::get('foolpod.main.name') ?> Package Manager <?= \Config::get('foolpod.main.version') ?></a>

			<?php
			$bottom_nav = array();
			$bottom_nav = Plugins::run_hook('ff.themes.generic_bottom_nav_buttons', array($bottom_nav), 'simple');

			if (!empty($bottom_nav))
			{
				echo '<div class="pull-right" style="margin-right: 15px;">';
				foreach ($bottom_nav as $key => $nav)
				{
					echo '<a href="' . $nav['href'] . '">' . $nav['text'] . '</a>';
					if ($key < count($bottom_nav) - 1)
					{
						echo ' - ';
					}
				}
				echo '</div>';
			}

			if (Preferences::get('ff.theme.footer_text'))
			{
				echo '<section class="footer_text">' . Preferences::get('ff.theme.footer_text') . '</section>';
			}
			?>
		</footer>

		</div>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?= Uri::base() ?>assets/js/jquery.js"><\/script>')</script>
		<script defer src="<?= Uri::base() ?>assets/bootstrap2/js/bootstrap.min.js?v=<?= \Config::get('foolfuuka.main.version') ?>"></script>
		<script defer src="<?= Uri::base() . $this->fallback_asset('plugins.js') ?>"></script>
		<script defer src="<?= Uri::base() . $this->fallback_asset('pod.js') ?>"></script>
		
		<?php if (Preferences::get('ff.theme.google_analytics')) : ?>
		<script>
			var _gaq=[['_setAccount','<?= Preferences::get('ff.theme.google_analytics') ?>'],['_trackPageview'],['_trackPageLoadTime']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
				g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
				s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>
		<?php endif; ?>

		<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
			 chromium.org/developers/how-tos/chrome-frame-getting-started -->
		<!--[if lt IE 7 ]>
		  <script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		  <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		<?= Preferences::get('ff.theme.footer_code'); ?>
	</body>
</html>
