	<!-- if user is logged in, then display welcome message -->
	<?php if ($user): ?>

		<div class="landing">
			
			Hello <?=$user->first_name;?>

			<br><br>
				<?=$score_id?>
			<br>
			<form action="/pariksa/p_cont_game/" method='POST'>
				Level <?=$scores->vyanjana?><input type="text" name='vyanjana'>
				<input type='submit' value='Change Level'>
			</form>

			<form action="/pariksa/p_quit_game" method='POST'>
				<input type='submit' value='Quit'>
			</form>

			<br>

			<form action="/pariksa/p_submit_game" method='POST'>
				<input type='submit' value='submit'>
			</form>

		</div>

	<!-- if user is not logged ask them to login or signup -->
	<?php else: ?>

		<div class="nouser">
			Please <a href='/users/signup'>Sign Up</a> or <a href='/users/login'>Log In</a>
			<!-- to be removed -->
			<a href="/pariksa/game">Play</a>

							
		</div>

	<?php endif; ?>