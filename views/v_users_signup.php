	
	<div class='title'>

		<span class='main-title'>Devanagari <br> Pariksha</span>

		<br><br>

	</div>

	<!-- signup form -->

	<div id="signup-form-div">
		<fieldset>
			<legend><h2>Welcome, please sign up</h2></legend>
			<form class="cmxform" id='signup-form' method='POST' action='/users/p_signup'>
				
				<br>

				<label id='login-email' for='first_name'>First Name * </label><br>
					<input type='text' name='first_name' id='login-input' maxlength='14' required><br><br>

				<label id='login-email' for='last_name'>Last Name *</label><br>
					<input type='text' name='last_name' id='login-input' maxlength='14' required><br><br>

				<label id='login-email' for='email'>Email *</label><br>
					<input type='email' name='email' id='login-input' required><br><br>

				<label id='login-email' for='password'>Password *</label><br>
					<input type='password' name='password' id='login-input' maxlength='10' required><br>

				<br><br>

				<input class='continue-button' type='submit' value='Sign Up'>

			</form>
		</fieldset>
	</div>




