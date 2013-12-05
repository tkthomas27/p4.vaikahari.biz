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

		<div class="nouser">

			Please sign up or log in

		</div>

	<?php endif; ?>