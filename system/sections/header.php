<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title>Site simple - titre</title>
	<link rel="shortcut icon" href="<?php print HTTP; ?>assets/img/favicon.ico" />
	<script>
		var isRetina = (window.devicePixelRatio > 1 || (window.matchMedia && window.matchMedia("(-webkit-min-device-pixel-ratio: 1.5),(-moz-min-device-pixel-ratio: 1.5),(min-device-pixel-ratio: 1.5)").matches));
		if (isRetina) document.write('<link rel="shortcut icon" href="<?php print HTTP; ?>assets/img/favicon@2x.ico" />');
	</script>
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes" />
	<meta name="description" content="Déscription du site en question" />
	<link rel="stylesheet" href="<?php print HTTP; ?>assets/css/site.css" />
</head>
<body class="no-js">

	<script>
		// set default for body element
		var body = (document.getElementsByTagName('body')[0] || document.body);
		
		// detect javascript
		body.className = body.className.replace(/\b ?no-js\b/g, '');
		
		// detect touch devices
		if('ontouchstart' in window || 'onmsgesturechange' in window) {
			body.className += ' touch-device';
		}
	</script>

	<div class="section" id="header">
		<div class="wrapper narrow">
			<div class="column-100">
				<h1 id="logo"><a href="<?php echo HTTP; ?>">Titre du site</a></h1>
	
				<div class="navigation">
					<div class="nav-container">
						<?php
						
							// Menu de navigation
							// chemins relatifs: 'Example' => 'example'
							// chemins absolus: 'Example' => 'http://example.com'
							navigation(array(
								'À propos' => 'about',
								'Portfolio' => 'portfolio',
								'Blog' => 'blog/',
								'Contact' => 'contact'
							));
						
						?>
					</div>
				</div>
			</div>
		</div>
	</div>