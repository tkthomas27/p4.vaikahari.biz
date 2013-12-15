	
	<!-- if user is logged in, display their profile -->
	<?php if(isset($user)): ?>


		<div class="devata-profile-position">						
			<img src="<?=$user->devata?>" class='profile-devata'><br>
			Ishta Devata <br>
		</div>

		<div class='location-profile-position'>
			<span class="profile-name"><?=$user->first_name?> <?=$user->first_name?></span>
			Location: <?=$user->location?><br>
		</div>

		<div class="avatar-profile-position">
			<img src="<?=$user->avatara?>" class='profile-avatar'><br>
			Avatar <br>
		</div>



		<div class='edit'>

			<a href="/users/profileedit">Edit Profile</a><br>
			<a href="/users/pwdchange">Edit Password</a><br>
			
		</div>

		<div>
			<!-- data table of games played -->
		</div>


	<!-- else ask them to sign up or log in -->
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
