

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
				<input type="radio" name="tattva" value="1">Numbers 1-4<br>
				<input type="radio" name="tattva" value="2">Numbers 5-9<br>
				<input type="radio" name="tattva" value="3">Simple Vowels<br>
				<input type="radio" name="tattva" value="4">Complex Vowels<br>
				<input type="radio" name="tattva" value="5">Velar Consonants<br>
				<input type="radio" name="tattva" value="6">Palatal Consonants<br>
				<input type="radio" name="tattva" value="7">Retroflex Consonants<br>
				<input type="radio" name="tattva" value="8">Dental Consonants<br>
				<input type="radio" name="tattva" value="9">Labial Consonants<br>
				<input type="radio" name="tattva" value="10">Semi-Vowels<br>
				<input type="radio" name="tattva" value="11">Spirants<br>

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