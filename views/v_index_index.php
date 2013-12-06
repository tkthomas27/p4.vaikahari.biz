

<div class="landing">
	<!-- landing page title -->
	<div class='title'>

		Devanagari <br>
		Pariksa

		<br><br><br>

	</div>


	<!-- if user is logged in, then display welcome message -->
	<?php if ($user): ?>

		<div class="landing-user">
			
			Hello <?=$user->first_name;?><br>

			<a href="/pariksa/index">Play</a><br>
			<button>Instructions</button><br>
			<button>Profile</button><br>
			<button>Scores</button>

		</div>

	<!-- if user is not logged ask them to login or signup -->
	<?php else: ?>

		<div class="landing-user">

			Please <a href='/users/signup'>Sign Up</a> <br>
			or <br>
			<a href='/users/login'>Log In</a>

							
		</div>

	<?php endif; ?>

	</div>