	<!-- if user is logged in, allow them to change profile and password -->
	<?php if(isset($user)): ?>

		<div class="password-reset">

			<!-- form for changing password -->
			<form method='POST' action='/users/p_password'>

				<!-- fielset for reseting the password -->
				<fieldset>
					<legend>Password Reset</legend>

					<span id='login-email'>Email</span><br>
					<input type='text' name='email' id='login-input' required><br><br>
					<span id='login-email'>Current Password</span><br>
					<input type='password' name='password' id='login-input' maxlength='10' required><br><br>
					<span id='login-email'>New Password</span><br>
					<input type="password" name='newpassword' id='login-input' maxlength='10' required><br>

					<br>

					<!-- php if statements for displaying the errors -->
					<?php if(isset($error) && $error == 'blank-field'): ?>
						<div class='error-log'>
							Password change failed. No blank Fields!
						</div>
						<br>
					<?php endif; ?>

					<!-- php if statements for displaying the errors -->
					<?php if(isset($error) && $error =='pwd-fail'): ?>
						<div class='error-log'>
							Password change failed. Password and Email don't match!
						</div>
						<br>
					<?php endif; ?>

					<!-- php if statements for displaying the errors -->
					<?php if(isset($error) && $error =='success'): ?>
						<div class='error-log'>
							Password change was a success!
						</div>
						<br>
					<?php endif; ?>

					<br>

					<!-- submit button for password reset form -->
					<input type='submit' value='Submit Change' class='continue-button'>

				</fieldset>
			</form>
		</div>


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
		</div>

	<?php endif; ?>