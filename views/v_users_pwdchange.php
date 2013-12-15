	<!-- if user is logged in, allow them to change profile and password -->
	<?php if(isset($user)): ?>

		<!-- password change head -->
		<div class='proedithead'>

			Password Reset

		</div>

		<!-- form for changing password -->
		<form class='profileedit' method='POST' action='/users/p_password'>
			
			Email: <input type='text' name='email'><br>
			Current Password <input type='password' name='password'><br>
			New Password <input type="password" name='newpassword'><br>

			<input type='submit' value='Submit Change' class='proeditsubmit'>

		</form>

	<!-- if user is not logged, ask them to sign up or log in -->
	<?php else: ?>

		<div class="landing-nouser">
			<fieldset>
				<legend><h1>भो:! Welcome! भो:!</h1></legend>
				
					<p class='intro'>
						For centuries, Devanagari (देवनागरी) has been the primary script for billions across South Asia. Devanagari Pariksha (Devanagari test) is your first step towards accessing South Asia's rich textual and cultural traditions. The test format is a memory card flipping game. For each round, you start with 1000 points and lose points for every second and click it takes to complete the page. Efficiency and quickness are the key to learning!
					</p>

					<br>

					<a href='/users/signup' class='continue-button' data-intro="If this is your first time, please login so you can track your progress" data-position="left">Sign Up</a>   <a href='/users/login' class='continue-button' data-intro="If you have been here before, please log in" data-position="right">Log In</a>
			
			</fieldset>

	<?php endif; ?>