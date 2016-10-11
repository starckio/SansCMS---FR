<?php require_once('config.php') ?>

	<div class="section">
		<div class="wrapper narrow">
			<div class="column-100">
				<h1>Portfolio</h1>
				<p>Ouvrez <code>/portfolio.php</code> dans votre éditeur de code et saisissez le jeton d'accès (token) requis pour obtenir l'exécution du module Dribbble.</p>
			</div>
		</div>
		<div class="wrapper">
			<?php
			
				// dribbble module
				echo dribbble(array(
					// required, visit https://api.dribbble.com to get yours
					'token' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
					// optional, defaults to 10, maximum is 50
					'count' => 10,
					// optional, defaults to 50
					'column' => 50
				));
				
			?>
		</div>

<?php section('footer') ?>