

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

			<form action="/pariksa/p_init_game" method='POST'>
				<input type="radio" name="vyanjana" value="1">Level One <br>
				<input type="radio" name="vyanjana" value="2">Level Two <br>
				<input type="radio" name="vyanjana" value="3">Level Three <br>
				<input type="radio" name="vyanjana" value="4">Level Four <br>
				<input type="radio" name="vyanjana" value="5">Level Five <br>
				<input type="radio" name="vyanjana" value="6">Level Six <br>
				<input type="radio" name="vyanjana" value="7">Level Seven <br>
				<input type="radio" name="vyanjana" value="8">Level Eight <br>

				<input type="submit" value='Start Game'>
			</form>
			<br><br>
			<button>Instructions</button><br>
			<button>Profile</button><br>
			<button>Scores</button>

			<a href="/users/logout">Logout</a>


			<br>

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