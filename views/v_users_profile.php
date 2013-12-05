	
	<!-- if user is logged in, display their profile -->
	<?php if(isset($user)): ?>

		<div class="prohead">

			<?=$user->first_name?> <?=$user->last_name?>

		</div>

		<div>
			badges
		</div>

		<div class='prodetail'>

			Location: <?=$user->location?><br>
			Ishta Devata: <?=$user->devata?><br>
			Avatar: <?=$user->avatar?><br>

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
