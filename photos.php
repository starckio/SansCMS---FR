<?php require_once('config.php') ?>

	<div class="section">
		<div class="wrapper narrow">
			<div class="column-100">
				<h1>Photography</h1>
				<p>Ouvrez <code>/photos.php</code> dans votre éditeur de code et saisissez le jeton d'accès (token) requis pour obtenir l'exécution du module Instagram.</p>
			</div>
		</div>
		<div class="wrapper">
			<?php
			
				// instagram module
				echo instagram(array(
					// required, the following page explains well how to get your access token, as it's a bit of a workaround: http://jelled.com/instagram/access-token
					'token' => 'xxxxxxx.xxxxxxx.xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
					// optional, defaults to 10, maximum is 20
					'count' => 18,
					// optional, defaults to 33
					'column' => 33
				));
				
			?>
		</div>

<?php section('footer') ?>