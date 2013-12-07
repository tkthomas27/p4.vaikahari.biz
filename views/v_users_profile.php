	
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

		<div class="nouser">

			<!-- make these links -->
			Please sign up or log in

		</div>

	<?php endif; ?>
