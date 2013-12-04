
	<!-- landing page title -->
	<div class='title'>

		Devanagari Pariksa

	</div>


	<!-- if user is logged in, then display welcome message -->
	<?php if ($user): ?>

		<div class="landing">
			
			Hello <?=$user->first_name;?>
			<button>Instructions</button>
				<!-- maybe use bootstrap to format to look like button - depends on the instructions button above -->
			<a href="/pariksa/index">Play</a>

		</div>

	<!-- if user is not logged ask them to login or signup -->
	<?php else: ?>

		<div class="nouser">

			Please <a href='/users/signup'>Sign Up</a> or <a href='/users/login'>Log In</a>
							
		</div>

	<?php endif; ?>