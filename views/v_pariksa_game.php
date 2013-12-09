

	<?php if ($user && $user->tattva == 1): ?>

		<div class="game-wrap">
			
			<div class="game-greet">
				Hello <?=$user->first_name;?>
			</div>

			<br><br>

			<div id="my-memorygame" class="quizy-memorygame">
				<ul class='match-game-ul'>
					<li class="match1" id='quiz-card'>
						<img src="/images/devnag/one.png" alt="" class='mem-card-img'>
					</li>
					<li class="match2" id='quiz-card'>
						<img src="/images/devnag/two.png" alt="" class='mem-card-img'>
					</li>
					<li class="match1" id='quiz-card'>
						One
					</li>
					<li class="match2" id='quiz-card'>
						Two
					</li>
					<li class="match3" id='quiz-card'>
						<img src="/images/devnag/three.png" alt="" class='mem-card-img'>
					</li>
					<li class="match4" id='quiz-card'>
						<img src="/images/devnag/four.png" alt="" class='mem-card-img'>
					</li>
					<li class="match3" id='quiz-card'>
						Three
					</li>
					<li class="match4" id='quiz-card'>
						Four
					</li>
					<li class="match5" id='quiz-card'>
						<img src="/images/devnag/five.png" alt="" class='mem-card-img'>
					</li>
					<li class="match5" id='quiz-card'>
						Five
					</li>
				</ul>
			</div>

			<form action="/pariksa/p_cont_game/" method='POST'>
				<input type="hidden" name='tattva' value='2'>
				<input type='submit' value='Continue to Numbers 5-9'>
			</form>

			<br><br>

			<div id="dialog" title="Dialog">
				<p>Quitting will submit your current progress to the High Score Table and delete your current progress. Are you sure?</p>
			
				<form action="/pariksa/p_quit_game" method='POST'>
					<input type='submit' value='Quit'>
				</form>
			</div>

			<input type="button" id="button" value="Quit">

			<br><br><br>

		</div>


	<?php elseif ($user && $user->tattva == 2): ?>

			<div class="game-wrap">
			
			<div class="game-greet">
			Hello <?=$user->first_name;?>
			</div>

			<br><br>
			<div id="my-memorygame" class="quizy-memorygame">
			<ul class='match-game-ul'>
				<li class="match1" id='quiz-card'>
					<img src="/images/devnag/six.png" alt="" class='mem-card-img'>
				</li>
				<li class="match2" id='quiz-card'>
					<img src="/images/devnag/seven.png" alt="" class='mem-card-img'>
				</li>
				<li class="match1" id='quiz-card'>
					Six
				</li>
				<li class="match2" id='quiz-card'>
					Seven
				</li>
				<li class="match3" id='quiz-card'>
					<img src="/images/devnag/eight.png" alt="" class='mem-card-img'>
				</li>
				<li class="match4" id='quiz-card'>
					<img src="/images/devnag/nine.png" alt="" class='mem-card-img'>
				</li>
				<li class="match3" id='quiz-card'>
					Eight
				</li>
				<li class="match4">
					Nine
				</li>
			</ul>
			</div>

			<form action="/pariksa/p_cont_game/" method='POST'>
				Level <input type="text" name='tattva'>
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

	<?php elseif ($user && $user->tattva == 3): ?>

		<div class="game-wrap">
			
			<div class="game-greet">
			Hello <?=$user->first_name;?>
			</div>

			<br><br>

			<div id="my-memorygame" class="quizy-memorygame">
			<ul>
				<li class="match1">
					<img src="/images/devnag/ka.png" alt="">
				</li>
				<li class="match2">
					<img src="/images/devnag/kha.png" alt="">
				</li>
				<li class="match1">
					ka
				</li>
				<li class="match2">
					kha
				</li>
				<li class="match3">
					<img src="/images/devnag/ga.png" alt="">
				</li>
				<li class="match4">
					<img src="/images/devnag/gha.png" alt="">
				</li>
				<li class="match3">
					ga
				</li>
				<li class="match4">
					gha
				</li>
				<li class="match5">
					<img src="/images/devnag/na_velar.png" alt="">
				</li>
				<li class="match5">
					ṇa (ng)
				</li>
			</ul>
			</div>

			<form action="/pariksa/p_cont_game/" method='POST'>
				Level <?=print_r($scores->tattva)?><input type="text" name='tattva'>
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

	<?php elseif ($user && $user->tattva == 4): ?>

			<div class="landing">
			
			Hello <?=$user->first_name;?>

			<br><br>

		<div id="my-memorygame" class="quizy-memorygame">
		<ul>
		  <li class="match1">
			Level Three
		  </li>
		  <li class="match2">
			Level Threea
		  </li>
		  <li class="match1">
			Level Three
		  </li>
		  <li class="match2">
			Level Threeb
		  </li>
		</ul>
		</div>

<br><br>

			<form action="/pariksa/p_cont_game/" method='POST'>
				Level<input type="text" name='tattva'>
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