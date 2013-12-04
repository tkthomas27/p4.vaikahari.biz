	
	<!-- if user is logged in, allow them to change profile and password -->
	<?php if(isset($user)): ?>

		<!-- profile editor head -->
		<div class='proedithead'>

		Editing Profile for <?=$user->first_name?> <?=$user->last_name?>

		</div>

		<!-- profile editor form -->
		<form class='profileedit' method='POST' action='/users/p_profileedit'>

			Location <input type='text' name='location'><br>
			Ishta Devata <input type='text' name='devata'><br>
			Avatar <input type='text' name='avatar'><br>

			<input type='submit' value='Submit Edit' class='proeditsubmit'>

		</form>

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