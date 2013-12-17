
	<!-- login head -->
	<div class='title'>

		<span class='main-title'>Devanagari <br> Pariksha</span>

		<br>

	</div>

	<div class="login-div">
		<!-- form for loggin in -->
		<form method='POST' action='/users/p_login' class='login'>

			<span id='login-email'>Email</span><br>
			<input type='text' name='email' id='login-input'><br> <br>
			<span id='login-email'>Password</span><br>
			<input type='password' name='password' id='login-input'><br>

			<br><br>

		<!-- if errors in the processing -->
		<?php if(isset($error)): ?>

			<div class='error-log'>
				Login failed. Please double check your email and password.
			</div>

			<br>

		<?php endif; ?>

			<input type='Submit' value='Log In' class='continue-button'>

		</form>
		
		<br><br>

		<a href='/users/signup' class='continue-button'>Sign Up</a>

	</div>