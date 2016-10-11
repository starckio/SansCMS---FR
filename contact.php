<?php require_once('config.php') ?>

	<div class="section">
		<div class="wrapper narrow">
			<div class="column-100">
				<h1>Let’s connect!</h1>
				<p>Ouvrez <code>/system/scripts/send.php</code> dans votre éditeur de code et ajouter votre adresse e-mail pour obtenir le formulaire opérationnel. Ouvrez <code>/contact.php</code> pour modifier le formulaire.</p>
				
				<noscript>
					<p class="error">l'Email ne peut pas être envoyé lorsque JavaScript est désactivé.</p>
				</noscript>
			
				<?php $state = $_GET['state']; if ($state == 'success') { ?>
				
					<p class="success">Votre message a été envoyé.</p>
				
				<?php } else if ($state == 'error') { ?>
				
					<p class="error">Quelque chose a mal tourné et votre message n'a pas été envoyé. <a href="<?php echo HTTP ?>contact">Réessayer &#8594;</a></p>
				
				<?php } else { ?>
				
					<form id="contact" action="javascript:void(0);" method="post" onsubmit="return validate(this);" novalidate>
					
						<input style="display: none;" type="text" name="antibot" class="required antibot" value="antibot" />
						
						<div class="float-label">
							<input type="text" name="name" class="required" placeholder="Nom / Prénom" />
							<label>Nom / Prénom</label>
						</div>
						
						<div class="float-label">
							<input type="email" name="email" class="required" placeholder="Adresse Email" />
							<label>Adresse Email</label>
						</div>
						
						<div class="float-label">
							<span class="drop-down"></span>
							<select name="subject" class="required">
								<option selected>Première option</option>
								<option>Deuxième option</option>
								<option>Troisième option</option>
							</select>
						</div>
						
						<div class="float-label">
							<textarea name="message" class="required" placeholder="Votre message"></textarea>
							<label>Votre message</label>
						</div>
						
						<button type="submit">Envoyer le message</button>
						
					</form>
				
				<?php } ?>
			</div>
		</div>
	</div>

<?php section('footer') ?>