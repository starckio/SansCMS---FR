	<div class="section" id="footer">
		<div class="wrapper narrow">
			<div class="column-100">
				<hr class="divider" />
				
				<div class="navigation">
					<div class="nav-container">
						<?php
						
							// Menu de navigation
							// chemins relatifs: 'Example' => 'example'
							// chemins absolus: 'Example' => 'http://example.com'
							navigation(array(
								'Footer Page' => 'page',
								'Photos' => 'photos',
								'Twitter' => 'https://twitter.com/starckio',
								'Dribbble' => 'https://dribbble.com/starckio'
							));
						
						?>
					</div>
				</div>
							
			</div>
		</div>
	</div>

	<script src="<?php print HTTP; ?>assets/js/site.js"></script>

</body>
</html>