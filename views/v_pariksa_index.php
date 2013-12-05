	<!-- if user is logged in, then display welcome message -->
	<?php if ($user): ?>

		<div class="landing">
			
			Hello <?=$user->first_name;?>

		</div>

	<!-- if user is not logged ask them to login or signup -->
	<?php else: ?>

		<div class="nouser">
			Please <a href='/users/signup'>Sign Up</a> or <a href='/users/login'>Log In</a>
			<!-- to be removed -->
			<a href="/pariksa/index">Play</a>

							
		</div>

	<?php endif; ?>