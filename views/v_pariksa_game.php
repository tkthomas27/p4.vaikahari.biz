

	<?php if ($user && $user->tattva == 1): ?>

		<!-- Wrapper for the entire game -->
		<div class="game-wrap">
			<img src="/images/placeholder.gif" alt="" id='fake-image'>
			<!-- Header showing the current level -->
			<div class='level-head'>
				Level One: Numbers 1-5 
				<div id="cheat-div">	
				<button id="cheat-button">Cheat Sheet</button>
				</div>
			</div>

			<br>

			<!-- The memory game itself -->
			<div id="my-memorygame" class="quizy-memorygame">
				<ul class='match-game-ul'>
					<li class="match1" id='quiz-card'>
						<img src="/images/devnag/one.png" alt="one" class='mem-card-img'>
					</li>
					<li class="match2" id='quiz-card'>
						<img src="/images/devnag/two.png" alt="two" class='mem-card-img'>
					</li>
					<li class="match1" id='quiz-card'>
						One
					</li>
					<li class="match2" id='quiz-card'>
						Two
					</li>
					<li class="match3" id='quiz-card'>
						<img src="/images/devnag/three.png" alt="three" class='mem-card-img'>
					</li>
					<li class="match4" id='quiz-card'>
						<img src="/images/devnag/four.png" alt="four" class='mem-card-img'>
					</li>
					<li class="match3" id='quiz-card'>
						Three
					</li>
					<li class="match4" id='quiz-card'>
						Four
					</li>
					<li class="match5" id='quiz-card'>
						<img src="/images/devnag/five.png" alt="five" class='mem-card-img'>
					</li>
					<li class="match5" id='quiz-card'>
						Five
					</li>
				</ul>
			</div>

			<div class="both-button-div">
				<!-- Form for posting data to advance to next level and the score -->
				<form action="/pariksa/p_cont_game/" method='POST'>
					<!-- Next level data -->
					<input type="hidden" name='tattva' value='2'>
					<!-- The score data: javascript feeds data from jquery.quizmemorygame.js to the blank value, php then reads it from here in the post action -->
					<input type="hidden" name='score' class='score-holder' value=''>
					<!-- the continue button -->
					<div id="continue-button-div">
						<input type='submit' value='Continue to Numbers 5-9  &rarr;' class='score-stop'>
					</div>
				</form>


				<!-- hidden dialog box, will displayed when the quit button is clicked to ask for confirmation -->
				<div id="quit-dialog" title="Level One: Quit?">
					<p>Quitting will submit your past progress to High Score Table and delete your current progress. You must continue to the next page to save your progress from this level. Are you sure you want to quit?</p>
					
					<!-- The actual quiz button -->
					<form action="/pariksa/p_quit_game" method='POST'>
						<input type='submit' value='Quit' id='quit-button'>
					</form>
				</div>

				<!-- The fake quit button that calls up the confirmation box -->
				<div id='quit-button-div'>
					<button id="quit-button">Quit</button>
				</div>

				<div id="cheat-dialog" title="Level One: Cheat Sheet">
					<img src="/images/cheat_number1.png" alt="">
				</div>

			</div>

			<br><br>

			<!-- the visual progress bar -->
			<div class='progress-bar-div'>
				<div class='top-progress-bar'>
					<ul>
						<li>
							<img src="/images/devnag/one.png" alt="one" id='progress-current'>
						</li>
						<li>
							<img src="/images/devnag/six.png" alt="six" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/vowel_a.png" alt="vowel a" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/vowel_e.png" alt="vowel e" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/ka.png" alt="ka" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/ca.png" alt="ca" id='progress-future'>
						</li>
					</ul>
				</div>
				<div class="bottom-progress-bar">
					<ul>
						<li>
							<img src="/images/devnag/xta.png" alt="xta" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/ta.png" alt="ta" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/pa.png" alt="pa" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/ya.png" alt="ya" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/sha.png" alt="sha" id='progress-future'>
						</li>
					</ul>
				</div>
			</div>

			<br><br><br>

		</div>


	<?php elseif ($user && $user->tattva == 2): ?>

		<!-- Wrapper for the entire game -->
		<div class="game-wrap">
			<img src="/images/placeholder.gif" alt="" id='fake-image'>
			<!-- Header showing the current level -->
			<div class='level-head'>
				Level Two: Numbers 6-9
				<div id="cheat-div">	
				<button id="cheat-button">Cheat Sheet</button>
				</div>
			</div>

			<br>

			<!-- The memory game itself -->
			<div id="my-memorygame" class="quizy-memorygame">
				<ul class='match-game-ul'>
					<li class="match1" id='quiz-card'>
						<img src="/images/devnag/six.png" alt="Six" class='mem-card-img'>
					</li>
					<li class="match2" id='quiz-card'>
						<img src="/images/devnag/seven.png" alt="Seven" class='mem-card-img'>
					</li>
					<li class="match1" id='quiz-card'>
						Six
					</li>
					<li class="match2" id='quiz-card'>
						Seven
					</li>
					<li class="match3" id='quiz-card'>
						<img src="/images/devnag/eight.png" alt="eight" class='mem-card-img'>
					</li>
					<li class="match4" id='quiz-card'>
						<img src="/images/devnag/nine.png" alt="nine" class='mem-card-img'>
					</li>
					<li class="match3" id='quiz-card'>
						Eight
					</li>
					<li class="match4" id='quiz-card'>
						Nine
					</li>
				</ul>
			</div>

			<div class="both-button-div">
				<!-- Form for posting data to advance to next level and the score -->
				<form action="/pariksa/p_cont_game/" method='POST'>
					<!-- Next level data -->
					<input type="hidden" name='tattva' value='3'>
					<!-- The score data: javascript feeds data from jquery.quizmemorygame.js to the blank value, php then reads it from here in the post action -->
					<input type="hidden" name='score' class='score-holder' value=''>
					<!-- the continue button -->
					<div id="continue-button-div">
						<input type='submit' value='Continue to Simple Vowels  &rarr;' class='score-stop'>
					</div>
				</form>

				<!-- hidden dialog box, will displayed when the quit button is clicked to ask for confirmation -->
				<div id="quit-dialog" title="Level Two: Quit?">
					<p>Quitting will submit your past progress to High Score Table and delete your current progress. You must continue to the next page to save your progress from this level. Are you sure you want to quit?</p>
					
					<!-- The actual quiz button -->
					<form action="/pariksa/p_quit_game" method='POST'>
						<input type='submit' value='Quit' id='quit-button'>
					</form>
				</div>

				<!-- The fake quit button that calls up the confirmation box -->
				<div id='quit-button-div'>
					<button id="quit-button">Quit</button>
				</div>

				<div id="cheat-dialog" title="Level Two: Cheat Sheet">
					<img src="/images/cheat_numbers2.png" alt="">
				</div>
			</div>

			<br><br>

			<!-- the visual progress bar -->
			<div class='progress-bar-div'>
				<div class='top-progress-bar'>
					<ul class='progress-bar'>
						<li>
							<img src="/images/devnag/one.png" alt="one" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/six.png" alt="six" id='progress-current'>
						</li>
						<li>
							<img src="/images/devnag/vowel_a.png" alt="vowel a" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/vowel_e.png" alt="vowel e" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/ka.png" alt="ka" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/ca.png" alt="ca" id='progress-future'>
						</li>
					</ul>
				</div>
				<div class="bottom-progress-bar">
					<ul class='progress-bar'>
						<li>
							<img src="/images/devnag/xta.png" alt="xta" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/ta.png" alt="ta" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/pa.png" alt="pa" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/ya.png" alt="ya" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/sha.png" alt="sha" id='progress-future'>
						</li>
					</ul>
				</div>
			</div>

			<br><br><br>

		</div>

	<?php elseif ($user && $user->tattva == 3): ?>

		<!-- Wrapper for the entire game -->
		<div class="game-wrap">
			<img src="/images/placeholder.gif" alt="" id='fake-image'>
			<!-- Header showing the current level -->
			<div class='level-head'>
				Level Three: Simple Vowels 
				<div id="cheat-div">	
				<button id="cheat-button">Cheat Sheet</button>
				</div>
			</div>

			<br>

			<!-- The memory game itself -->
			<div id="my-memorygame" class="quizy-memorygame">
				<ul class='match-game-ul'>
					<li class="match1" id='quiz-card'>
						<img src="/images/devnag/vowel_a.png" alt="Vowel A" class='mem-card-img'>
					</li>
					<li class="match2" id='quiz-card'>
						<img src="/images/devnag/vowel_aa.png" alt="Vowel Long A" class='mem-card-img'>
					</li>
					<li class="match1" id='quiz-card'>
						A
					</li>
					<li class="match2" id='quiz-card'>
						AA
					</li>
					<li class="match3" id='quiz-card'>
						<img src="/images/devnag/vowel_i.png" alt="Vowel I" class='mem-card-img'>
					</li>
					<li class="match4" id='quiz-card'>
						<img src="/images/devnag/vowel_ii.png" alt="Vowel II" class='mem-card-img'>
					</li>
					<li class="match3" id='quiz-card'>
						I
					</li>
					<li class="match4" id='quiz-card'>
						II
					</li>
					<li class="match5" id='quiz-card'>
						<img src="/images/devnag/vowel_u.png" alt="Vowel U" class='mem-card-img'>
					</li>
					<li class="match6" id='quiz-card'>
						<img src="/images/devnag/vowel_uu.png" alt="Vowel UU" class='mem-card-img'>
					</li>
					<li class="match5" id='quiz-card'>
						U
					</li>
					<li class="match6" id='quiz-card'>
						UU
					</li>
					<li class="match5" id='quiz-card'>
						<img src="/images/devnag/vowel_r.png" alt="Vowel R" class='mem-card-img'>
					</li>
					<li class="match5" id='quiz-card'>
						ṛ
					</li>
				</ul>
			</div>

			<div class="both-button-div">
				<!-- Form for posting data to advance to next level and the score -->
				<form action="/pariksa/p_cont_game/" method='POST'>
					<!-- Next level data -->
					<input type="hidden" name='tattva' value='4'>
					<!-- The score data: javascript feeds data from jquery.quizmemorygame.js to the blank value, php then reads it from here in the post action -->
					<input type="hidden" name='score' class='score-holder' value=''>
					<!-- the continue button -->
					<div id="continue-button-div">
						<input type='submit' value='Continue to Complex Vowels &rarr;' class='score-stop'>
					</div>
				</form>

				<!-- hidden dialog box, will displayed when the quit button is clicked to ask for confirmation -->
				<div id="quit-dialog" title="Level Three: Quit?">
					<p>Quitting will submit your past progress to High Score Table and delete your current progress. You must continue to the next page to save your progress from this level. Are you sure you want to quit?</p>
					
					<!-- The actual quiz button -->
					<form action="/pariksa/p_quit_game" method='POST'>
						<input type='submit' value='Quit' id='quit-button'>
					</form>
				</div>

				<!-- The fake quit button that calls up the confirmation box -->
				<div id='quit-button-div'>
					<button id="quit-button">Quit</button>
				</div>
				<div id="cheat-dialog" title="Level Three: Cheat Sheet">
					<img src="/images/cheat_vowels1.png" alt="">
				</div>
			</div>

			<br><br>

			<!-- the visual progress bar -->
			<div class='progress-bar-div'>
				<div class='top-progress-bar'>
					<ul class='progress-bar'>
						<li>
							<img src="/images/devnag/one.png" alt="one" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/six.png" alt="six" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/vowel_a.png" alt="vowel a" id='progress-current'>
						</li>
						<li>
							<img src="/images/devnag/vowel_e.png" alt="vowel e" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/ka.png" alt="ka" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/ca.png" alt="ca" id='progress-future'>
						</li>
					</ul>
				</div>
				<div class="bottom-progress-bar">
					<ul class='progress-bar'>
						<li>
							<img src="/images/devnag/xta.png" alt="xta" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/ta.png" alt="ta" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/pa.png" alt="pa" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/ya.png" alt="ya" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/sha.png" alt="sha" id='progress-future'>
						</li>
					</ul>
				</div>
			</div>

			<br><br><br>

		</div>

	<?php elseif ($user && $user->tattva == 4): ?>

		<!-- Wrapper for the entire game -->
		<div class="game-wrap">
			<img src="/images/placeholder.gif" alt="" id='fake-image'>
			<!-- Header showing the current level -->
			<div class='level-head'>
				Level Four: Complex Vowels
				<div id="cheat-div">	
				<button id="cheat-button">Cheat Sheet</button>
				</div>
			</div>

			<br>

			<!-- The memory game itself -->
			<div id="my-memorygame" class="quizy-memorygame">
				<ul class='match-game-ul'>
					<li class="match1" id='quiz-card'>
						<img src="/images/devnag/vowel_e.png" alt="Vowel E" class='mem-card-img'>
					</li>
					<li class="match2" id='quiz-card'>
						<img src="/images/devnag/vowel_ai.png" alt="Vowel Ai" class='mem-card-img'>
					</li>
					<li class="match1" id='quiz-card'>
						E
					</li>
					<li class="match2" id='quiz-card'>
						Ai
					</li>
					<li class="match3" id='quiz-card'>
						<img src="/images/devnag/vowel_o.png" alt="Vowel O" class='mem-card-img'>
					</li>
					<li class="match4" id='quiz-card'>
						<img src="/images/devnag/vowel_au.png" alt="Vowel Au" class='mem-card-img'>
					</li>
					<li class="match3" id='quiz-card'>
						O
					</li>
					<li class="match4" id='quiz-card'>
						Au
					</li>
					<li class="match5" id='quiz-card'>
						<img src="/images/devnag/vowel_lr.png" alt="Vowel Lr" class='mem-card-img'>
					</li>
					<li class="match5" id='quiz-card'>
						Lr
					</li>
				</ul>
			</div>

			<div class="both-button-div">
				<!-- Form for posting data to advance to next level and the score -->
				<form action="/pariksa/p_cont_game/" method='POST'>
					<!-- Next level data -->
					<input type="hidden" name='tattva' value='5'>
					<!-- The score data: javascript feeds data from jquery.quizmemorygame.js to the blank value, php then reads it from here in the post action -->
					<input type="hidden" name='score' class='score-holder' value=''>
					<!-- the continue button -->
					<div id="continue-button-div">
						<input type='submit' value='Continue to Velar Consonants &rarr;' class='score-stop'>
					</div>
				</form>

				<!-- hidden dialog box, will displayed when the quit button is clicked to ask for confirmation -->
				<div id="quit-dialog" title="Level Four: Quit?">
					<p>Quitting will submit your past progress to High Score Table and delete your current progress. You must continue to the next page to save your progress from this level. Are you sure you want to quit?</p>
					
					<!-- The actual quiz button -->
					<form action="/pariksa/p_quit_game" method='POST'>
						<input type='submit' value='Quit' id='quit-button'>
					</form>
				</div>

				<!-- The fake quit button that calls up the confirmation box -->
				<div id='quit-button-div'>
					<button id="quit-button">Quit</button>
				</div>
				<div id="cheat-dialog" title="Level Four: Cheat Sheet">
					<img src="/images/cheat_vowels2.png" alt="">
				</div>
			</div>

			<br><br>

			<!-- the visual progress bar -->
			<div class='progress-bar-div'>
				<div class='top-progress-bar'>
					<ul class='progress-bar'>
						<li>
							<img src="/images/devnag/one.png" alt="one" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/six.png" alt="six" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/vowel_a.png" alt="vowel a" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/vowel_e.png" alt="vowel e" id='progress-current'>
						</li>
						<li>
							<img src="/images/devnag/ka.png" alt="ka" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/ca.png" alt="ca" id='progress-future'>
						</li>
					</ul>
				</div>
				<div class="bottom-progress-bar">
					<ul class='progress-bar'>
						<li>
							<img src="/images/devnag/xta.png" alt="xta" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/ta.png" alt="ta" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/pa.png" alt="pa" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/ya.png" alt="ya" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/sha.png" alt="sha" id='progress-future'>
						</li>
					</ul>
				</div>
			</div>

			<br><br><br>

		</div>

	<?php elseif ($user && $user->tattva == 5): ?>

		<!-- Wrapper for the entire game -->
		<div class="game-wrap">
			<img src="/images/placeholder.gif" alt="" id='fake-image'>
			<!-- Header showing the current level -->
			<div class='level-head'>
				Level Five: Velar Consonants
				<div id="cheat-div">	
				<button id="cheat-button">Cheat Sheet</button>
				</div>
			</div>

			<br>

			<!-- The memory game itself -->
			<div id="my-memorygame" class="quizy-memorygame">
				<ul class='match-game-ul'>
					<li class="match1" id='quiz-card'>
						<img src="/images/devnag/ka.png" alt="ka" class='mem-card-img'>
					</li>
					<li class="match2" id='quiz-card'>
						<img src="/images/devnag/kha.png" alt="kha" class='mem-card-img'>
					</li>
					<li class="match1" id='quiz-card'>
						Ka
					</li>
					<li class="match2" id='quiz-card'>
						Kha
					</li>
					<li class="match3" id='quiz-card'>
						<img src="/images/devnag/ga.png" alt="ga" class='mem-card-img'>
					</li>
					<li class="match4" id='quiz-card'>
						<img src="/images/devnag/gha.png" alt="gha" class='mem-card-img'>
					</li>
					<li class="match3" id='quiz-card'>
						Ga
					</li>
					<li class="match4" id='quiz-card'>
						Gha
					</li>
					<li class="match5" id='quiz-card'>
						<img src="/images/devnag/na_velar.png" alt="Na" class='mem-card-img'>
					</li>
					<li class="match5" id='quiz-card'>
						Na
					</li>
				</ul>
			</div>

			<div class="both-button-div">
				<!-- Form for posting data to advance to next level and the score -->
				<form action="/pariksa/p_cont_game/" method='POST'>
					<!-- Next level data -->
					<input type="hidden" name='tattva' value='6'>
					<!-- The score data: javascript feeds data from jquery.quizmemorygame.js to the blank value, php then reads it from here in the post action -->
					<input type="hidden" name='score' class='score-holder' value=''>
					<!-- the continue button -->
					<div id="continue-button-div">
						<input type='submit' value='Continue to Palatal Consonants &rarr;' class='score-stop'>
					</div>
				</form>

				<!-- hidden dialog box, will displayed when the quit button is clicked to ask for confirmation -->
				<div id="quit-dialog" title="Level Five: Quit?">
					<p>Quitting will submit your past progress to High Score Table and delete your current progress. You must continue to the next page to save your progress from this level. Are you sure you want to quit?</p>
					
					<!-- The actual quiz button -->
					<form action="/pariksa/p_quit_game" method='POST'>
						<input type='submit' value='Quit' id='quit-button'>
					</form>
				</div>

				<!-- The fake quit button that calls up the confirmation box -->
				<div id='quit-button-div'>
					<button id="quit-button">Quit</button>
				</div>
				<div id="cheat-dialog" title="Level Five: Cheat Sheet">
					<img src="/images/cheat_velar.png" alt="">
				</div>
			</div>

			<br><br>

			<!-- the visual progress bar -->
			<div class='progress-bar-div'>
				<div class='top-progress-bar'>
					<ul class='progress-bar'>
						<li>
							<img src="/images/devnag/one.png" alt="one" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/six.png" alt="six" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/vowel_a.png" alt="vowel a" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/vowel_e.png" alt="vowel e" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/ka.png" alt="ka" id='progress-current'>
						</li>
						<li>
							<img src="/images/devnag/ca.png" alt="ca" id='progress-future'>
						</li>
					</ul>
				</div>
				<div class="bottom-progress-bar">
					<ul class='progress-bar'>
						<li>
							<img src="/images/devnag/xta.png" alt="xta" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/ta.png" alt="ta" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/pa.png" alt="pa" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/ya.png" alt="ya" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/sha.png" alt="sha" id='progress-future'>
						</li>
					</ul>
				</div>
			</div>

			<br><br><br>

		</div>

	<?php elseif ($user && $user->tattva == 6): ?>

		<!-- Wrapper for the entire game -->
		<div class="game-wrap">
			<img src="/images/placeholder.gif" alt="" id='fake-image'>
			<!-- Header showing the current level -->
			<div class='level-head'>
				Level Six: Palatal Consonants
				<div id="cheat-div">	
				<button id="cheat-button">Cheat Sheet</button>
				</div>
			</div>

			<br>

			<!-- The memory game itself -->
			<div id="my-memorygame" class="quizy-memorygame">
				<ul class='match-game-ul'>
					<li class="match1" id='quiz-card'>
						<img src="/images/devnag/ca.png" alt="Ca" class='mem-card-img'>
					</li>
					<li class="match2" id='quiz-card'>
						<img src="/images/devnag/cha.png" alt="Cha" class='mem-card-img'>
					</li>
					<li class="match1" id='quiz-card'>
						Ca
					</li>
					<li class="match2" id='quiz-card'>
						Cha
					</li>
					<li class="match3" id='quiz-card'>
						<img src="/images/devnag/ja.png" alt="Ja" class='mem-card-img'>
					</li>
					<li class="match4" id='quiz-card'>
						<img src="/images/devnag/jha.png" alt="Jha" class='mem-card-img'>
					</li>
					<li class="match3" id='quiz-card'>
						Ja
					</li>
					<li class="match4" id='quiz-card'>
						Jha
					</li>
					<li class="match5" id='quiz-card'>
						<img src="/images/devnag/na_palatal.png" alt="Na Palatal" class='mem-card-img'>
					</li>
					<li class="match5" id='quiz-card'>
						Na
					</li>
				</ul>
			</div>

			<div class="both-button-div">
				<!-- Form for posting data to advance to next level and the score -->
				<form action="/pariksa/p_cont_game/" method='POST'>
					<!-- Next level data -->
					<input type="hidden" name='tattva' value='7'>
					<!-- The score data: javascript feeds data from jquery.quizmemorygame.js to the blank value, php then reads it from here in the post action -->
					<input type="hidden" name='score' class='score-holder' value=''>
					<!-- the continue button -->
					<div id="continue-button-div">
						<input type='submit' value='Continue to Retroflex Consonants  &rarr;' class='score-stop'>
					</div>
				</form>

				<!-- hidden dialog box, will displayed when the quit button is clicked to ask for confirmation -->
				<div id="quit-dialog" title="Level Six: Quit?">
					<p>Quitting will submit your past progress to High Score Table and delete your current progress. You must continue to the next page to save your progress from this level. Are you sure you want to quit?</p>
					
					<!-- The actual quiz button -->
					<form action="/pariksa/p_quit_game" method='POST'>
						<input type='submit' value='Quit' id='quit-button'>
					</form>
				</div>

				<!-- The fake quit button that calls up the confirmation box -->
				<div id='quit-button-div'>
					<button id="quit-button">Quit</button>
				</div>
				<div id="cheat-dialog" title="Level Six: Cheat Sheet">
					<img src="/images/cheat_palatal.png" alt="">
				</div>
			</div>

			<br><br>

			<!-- the visual progress bar -->
			<div class='progress-bar-div'>
				<div class='top-progress-bar'>
					<ul class='progress-bar'>
						<li>
							<img src="/images/devnag/xta.png" alt="one" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/six.png" alt="six" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/vowel_a.png" alt="vowel a" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/vowel_e.png" alt="vowel e" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/ka.png" alt="ka" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/ca.png" alt="ca" id='progress-current'>
						</li>
					</ul>
				</div>
				<div class="bottom-progress-bar">
					<ul class='progress-bar'>
						<li>
							<img src="/images/devnag/xta.png" alt="xta" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/ta.png" alt="ta" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/pa.png" alt="pa" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/ya.png" alt="ya" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/sha.png" alt="sha" id='progress-future'>
						</li>
					</ul>
				</div>
			</div>

			<br><br><br>

		</div>

	<?php elseif ($user && $user->tattva == 7): ?>

		<!-- Wrapper for the entire game -->
		<div class="game-wrap">
			<img src="/images/placeholder.gif" alt="" id='fake-image'>
			<!-- Header showing the current level -->
			<div class='level-head'>
				Level Seven: Retroflex Consonants
				<div id="cheat-div">	
				<button id="cheat-button">Cheat Sheet</button>
				</div>
			</div>

			<br>

			<!-- The memory game itself -->
			<div id="my-memorygame" class="quizy-memorygame">
				<ul class='match-game-ul'>
					<li class="match1" id='quiz-card'>
						<img src="/images/devnag/xta.png" alt="xTa" class='mem-card-img'>
					</li>
					<li class="match2" id='quiz-card'>
						<img src="/images/devnag/xtha.png" alt="xTha" class='mem-card-img'>
					</li>
					<li class="match1" id='quiz-card'>
						xTa
					</li>
					<li class="match2" id='quiz-card'>
						xTha
					</li>
					<li class="match3" id='quiz-card'>
						<img src="/images/devnag/xda.png" alt="xDa" class='mem-card-img'>
					</li>
					<li class="match4" id='quiz-card'>
						<img src="/images/devnag/xdha.png" alt="xDha" class='mem-card-img'>
					</li>
					<li class="match3" id='quiz-card'>
						xDa
					</li>
					<li class="match4" id='quiz-card'>
						xDha
					</li>
					<li class="match5" id='quiz-card'>
						<img src="/images/devnag/na_retroflex.png" alt="Na (xna)" class='mem-card-img'>
					</li>
					<li class="match5" id='quiz-card'>
						xNa
					</li>
				</ul>
			</div>

			<div class="both-button-div">
				<!-- Form for posting data to advance to next level and the score -->
				<form action="/pariksa/p_cont_game/" method='POST'>
					<!-- Next level data -->
					<input type="hidden" name='tattva' value='8'>
					<!-- The score data: javascript feeds data from jquery.quizmemorygame.js to the blank value, php then reads it from here in the post action -->
					<input type="hidden" name='score' class='score-holder' value=''>
					<!-- the continue button -->
					<div id="continue-button-div">
						<input type='submit' value='Continue to Dental Consonants  &rarr;' class='score-stop'>
					</div>
				</form>

				<!-- hidden dialog box, will displayed when the quit button is clicked to ask for confirmation -->
				<div id="quit-dialog" title="Level Seven: Quit?">
					<p>Quitting will submit your past progress to High Score Table and delete your current progress. You must continue to the next page to save your progress from this level. Are you sure you want to quit?</p>
					
					<!-- The actual quiz button -->
					<form action="/pariksa/p_quit_game" method='POST'>
						<input type='submit' value='Quit' id='quit-button'>
					</form>
				</div>

				<!-- The fake quit button that calls up the confirmation box -->
				<div id='quit-button-div'>
					<button id="quit-button">Quit</button>
				</div>
				<div id="cheat-dialog" title="Level Seven: Cheat Sheet">
					<img src="/images/cheat_retroflex.png" alt="">
				</div>
			</div>

			<br><br>

			<!-- the visual progress bar -->
			<div class='progress-bar-div'>
				<div class='top-progress-bar'>
					<ul class='progress-bar'>
						<li>
							<img src="/images/devnag/one.png" alt="one" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/six.png" alt="six" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/vowel_a.png" alt="vowel a" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/vowel_e.png" alt="vowel e" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/ka.png" alt="ka" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/ca.png" alt="ca" id='progress-past'>
						</li>
					</ul>
				</div>
				<div class="bottom-progress-bar">
					<ul class='progress-bar'>
						<li>
							<img src="/images/devnag/xta.png" alt="xta" id='progress-current'>
						</li>
						<li>
							<img src="/images/devnag/ta.png" alt="ta" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/pa.png" alt="pa" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/ya.png" alt="ya" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/sha.png" alt="sha" id='progress-future'>
						</li>
					</ul>
				</div>
			</div>

			<br><br><br>

		</div>

	<?php elseif ($user && $user->tattva == 8): ?>

		<!-- Wrapper for the entire game -->
		<div class="game-wrap">
			<img src="/images/placeholder.gif" alt="" id='fake-image'>
			<!-- Header showing the current level -->
			<div class='level-head'>
				Level Eight: Dental Consonants
				<div id="cheat-div">	
				<button id="cheat-button">Cheat Sheet</button>
				</div>
			</div>

			<br>

			<!-- The memory game itself -->
			<div id="my-memorygame" class="quizy-memorygame">
				<ul class='match-game-ul'>
					<li class="match1" id='quiz-card'>
						<img src="/images/devnag/ta.png" alt="ta" class='mem-card-img'>
					</li>
					<li class="match2" id='quiz-card'>
						<img src="/images/devnag/tha.png" alt="tha" class='mem-card-img'>
					</li>
					<li class="match1" id='quiz-card'>
						Ta
					</li>
					<li class="match2" id='quiz-card'>
						Tha
					</li>
					<li class="match3" id='quiz-card'>
						<img src="/images/devnag/da.png" alt="da" class='mem-card-img'>
					</li>
					<li class="match4" id='quiz-card'>
						<img src="/images/devnag/dha.png" alt="dha" class='mem-card-img'>
					</li>
					<li class="match3" id='quiz-card'>
						Da
					</li>
					<li class="match4" id='quiz-card'>
						Dha
					</li>
					<li class="match5" id='quiz-card'>
						<img src="/images/devnag/na_dental.png" alt="Na" class='mem-card-img'>
					</li>
					<li class="match5" id='quiz-card'>
						Na
					</li>
				</ul>
			</div>

			<div class="both-button-div">
				<!-- Form for posting data to advance to next level and the score -->
				<form action="/pariksa/p_cont_game/" method='POST'>
					<!-- Next level data -->
					<input type="hidden" name='tattva' value='9'>
					<!-- The score data: javascript feeds data from jquery.quizmemorygame.js to the blank value, php then reads it from here in the post action -->
					<input type="hidden" name='score' class='score-holder' value=''>
					<!-- the continue button -->
					<div id="continue-button-div">
						<input type='submit' value='Continue to Labial Consonants  &rarr;' class='score-stop'>
					</div>
				</form>

				<!-- hidden dialog box, will displayed when the quit button is clicked to ask for confirmation -->
				<div id="quit-dialog" title="Level Eight: Quit?">
					<p>Quitting will submit your past progress to High Score Table and delete your current progress. You must continue to the next page to save your progress from this level. Are you sure you want to quit?</p>
					
					<!-- The actual quiz button -->
					<form action="/pariksa/p_quit_game" method='POST'>
						<input type='submit' value='Quit' id='quit-button'>
					</form>
					<div id="cheat-dialog" title="Level Eight: Cheat Sheet">
					<img src="/images/cheat_dental.png" alt="">
					</div>
				</div>

				<!-- The fake quit button that calls up the confirmation box -->
				<div id='quit-button-div'>
					<button id="quit-button">Quit</button>
				</div>
			</div>

			<br><br>

			<!-- the visual progress bar -->
			<div class='progress-bar-div'>
				<div class='top-progress-bar'>
					<ul class='progress-bar'>
						<li>
							<img src="/images/devnag/one.png" alt="one" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/six.png" alt="six" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/vowel_a.png" alt="vowel a" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/vowel_e.png" alt="vowel e" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/ka.png" alt="ka" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/ca.png" alt="ca" id='progress-past'>
						</li>
					</ul>
				</div>
				<div class="bottom-progress-bar">
					<ul class='progress-bar'>
						<li>
							<img src="/images/devnag/xta.png" alt="xta" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/ta.png" alt="ta" id='progress-current'>
						</li>
						<li>
							<img src="/images/devnag/pa.png" alt="pa" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/ya.png" alt="ya" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/sha.png" alt="sha" id='progress-future'>
						</li>
					</ul>
				</div>
			</div>

			<br><br><br>

		</div>

	<?php elseif ($user && $user->tattva == 9): ?>

		<!-- Wrapper for the entire game -->
		<div class="game-wrap">
			<img src="/images/placeholder.gif" alt="" id='fake-image'>
			<!-- Header showing the current level -->
			<div class='level-head'>
				Level Nine: Labial Consonants
				<div id="cheat-div">	
				<button id="cheat-button">Cheat Sheet</button>
				</div>
			</div>

			<br>

			<!-- The memory game itself -->
			<div id="my-memorygame" class="quizy-memorygame">
				<ul class='match-game-ul'>
					<li class="match1" id='quiz-card'>
						<img src="/images/devnag/pa.png" alt="pa" class='mem-card-img'>
					</li>
					<li class="match2" id='quiz-card'>
						<img src="/images/devnag/pha.png" alt="pha" class='mem-card-img'>
					</li>
					<li class="match1" id='quiz-card'>
						Pa
					</li>
					<li class="match2" id='quiz-card'>
						Pha
					</li>
					<li class="match3" id='quiz-card'>
						<img src="/images/devnag/ba.png" alt="ba" class='mem-card-img'>
					</li>
					<li class="match4" id='quiz-card'>
						<img src="/images/devnag/bha.png" alt="bha" class='mem-card-img'>
					</li>
					<li class="match3" id='quiz-card'>
						Ba
					</li>
					<li class="match4" id='quiz-card'>
						Bha
					</li>
					<li class="match5" id='quiz-card'>
						<img src="/images/devnag/ma.png" alt="ma" class='mem-card-img'>
					</li>
					<li class="match5" id='quiz-card'>
						Ma
					</li>
				</ul>
			</div>

			<div class="both-button-div">
				<!-- Form for posting data to advance to next level and the score -->
				<form action="/pariksa/p_cont_game/" method='POST'>
					<!-- Next level data -->
					<input type="hidden" name='tattva' value='10'>
					<!-- The score data: javascript feeds data from jquery.quizmemorygame.js to the blank value, php then reads it from here in the post action -->
					<input type="hidden" name='score' class='score-holder' value=''>
					<!-- the continue button -->
					<div id="continue-button-div">
						<input type='submit' value='Continue to Semi-Vowels &rarr;' class='score-stop'>
					</div>
				</form>

				<!-- hidden dialog box, will displayed when the quit button is clicked to ask for confirmation -->
				<div id="quit-dialog" title="Level Nine: Quit?">
					<p>Quitting will submit your past progress to High Score Table and delete your current progress. You must continue to the next page to save your progress from this level. Are you sure you want to quit?</p>
					
					<!-- The actual quiz button -->
					<form action="/pariksa/p_quit_game" method='POST'>
						<input type='submit' value='Quit' id='quit-button'>
					</form>
				</div>

				<!-- The fake quit button that calls up the confirmation box -->
				<div id='quit-button-div'>
					<button id="quit-button">Quit</button>
				</div>
				<div id="cheat-dialog" title="Level Nine: Cheat Sheet">
					<img src="/images/cheat_labial.png" alt="">
				</div>
			</div>

			<br><br>


			<!-- the visual progress bar -->
			<div class='progress-bar-div'>
				<div class='top-progress-bar'>
					<ul class='progress-bar'>
						<li>
							<img src="/images/devnag/one.png" alt="one" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/six.png" alt="six" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/vowel_a.png" alt="vowel a" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/vowel_e.png" alt="vowel e" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/ka.png" alt="ka" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/ca.png" alt="ca" id='progress-past'>
						</li>
					</ul>
				</div>
				<div class="bottom-progress-bar">
					<ul class='progress-bar'>
						<li>
							<img src="/images/devnag/xta.png" alt="xta" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/ta.png" alt="ta" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/pa.png" alt="pa" id='progress-current'>
						</li>
						<li>
							<img src="/images/devnag/ya.png" alt="ya" id='progress-future'>
						</li>
						<li>
							<img src="/images/devnag/sha.png" alt="sha" id='progress-future'>
						</li>
					</ul>
				</div>
			</div>

			<br><br><br>

		</div>

	<?php elseif ($user && $user->tattva == 10): ?>

		<!-- Wrapper for the entire game -->
		<div class="game-wrap">
			<img src="/images/placeholder.gif" alt="" id='fake-image'>
			<!-- Header showing the current level -->
			<div class='level-head'>
				Level Ten: Semi-Vowels
				<div id="cheat-div">	
				<button id="cheat-button">Cheat Sheet</button>
				</div>
			</div>

			<br>

			<!-- The memory game itself -->
			<div id="my-memorygame" class="quizy-memorygame">
				<ul class='match-game-ul'>
					<li class="match1" id='quiz-card'>
						<img src="/images/devnag/ya.png" alt="Ya" class='mem-card-img'>
					</li>
					<li class="match2" id='quiz-card'>
						<img src="/images/devnag/ra.png" alt="Ra" class='mem-card-img'>
					</li>
					<li class="match1" id='quiz-card'>
						Ya
					</li>
					<li class="match2" id='quiz-card'>
						Ra
					</li>
					<li class="match3" id='quiz-card'>
						<img src="/images/devnag/la.png" alt="La" class='mem-card-img'>
					</li>
					<li class="match4" id='quiz-card'>
						<img src="/images/devnag/va.png" alt="Va" class='mem-card-img'>
					</li>
					<li class="match3" id='quiz-card'>
						La
					</li>
					<li class="match4" id='quiz-card'>
						Va
					</li>
				</ul>
			</div>

			<div class="both-button-div">
				<!-- Form for posting data to advance to next level and the score -->
				<form action="/pariksa/p_cont_game/" method='POST'>
					<!-- Next level data -->
					<input type="hidden" name='tattva' value='11'>
					<!-- The score data: javascript feeds data from jquery.quizmemorygame.js to the blank value, php then reads it from here in the post action -->
					<input type="hidden" name='score' class='score-holder' value=''>
					<!-- the continue button -->
					<div id="continue-button-div">
						<input type='submit' value='Continue to Spirants &rarr;' class='score-stop'>
					</div>
				</form>

				<!-- hidden dialog box, will displayed when the quit button is clicked to ask for confirmation -->
				<div id="quit-dialog" title="Level Ten: Quit?">
					<p>Quitting will submit your past progress to High Score Table and delete your current progress. You must continue to the next page to save your progress from this level. Are you sure you want to quit?</p>
					
					<!-- The actual quiz button -->
					<form action="/pariksa/p_quit_game" method='POST'>
						<input type='submit' value='Quit' id='quit-button'>
					</form>
				</div>

				<!-- The fake quit button that calls up the confirmation box -->
				<div id='quit-button-div'>
					<button id="quit-button">Quit</button>
				</div>
				<div id="cheat-dialog" title="Level Ten: Cheat Sheet">
					<img src="/images/cheat_semi-vowels.png" alt="">
				</div>
			</div>

			<br><br>

			<!-- the visual progress bar -->
			<div class='progress-bar-div'>
				<div class='top-progress-bar'>
					<ul class='progress-bar'>
						<li>
							<img src="/images/devnag/one.png" alt="one" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/six.png" alt="six" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/vowel_a.png" alt="vowel a" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/vowel_e.png" alt="vowel e" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/ka.png" alt="ka" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/ca.png" alt="ca" id='progress-past'>
						</li>
					</ul>
				</div>
				<div class="bottom-progress-bar">
					<ul class='progress-bar'>
						<li>
							<img src="/images/devnag/xta.png" alt="xta" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/ta.png" alt="ta" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/pa.png" alt="pa" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/ya.png" alt="ya" id='progress-current'>
						</li>
						<li>
							<img src="/images/devnag/sha.png" alt="sha" id='progress-future'>
						</li>
					</ul>
				</div>
			</div>

			<br><br><br>

		</div>

	<?php elseif ($user && $user->tattva == 11): ?>

		<!-- Wrapper for the entire game -->
		<div class="game-wrap">
			<img src="/images/placeholder.gif" alt="" id='fake-image'>
			<!-- Header showing the current level -->
			<div class='level-head'>
				Level Level: Spirants
				<div id="cheat-div">	
				<button id="cheat-button">Cheat Sheet</button>
				</div>
			</div>

			<br>

			<!-- The memory game itself -->
			<div id="my-memorygame" class="quizy-memorygame">
				<ul class='match-game-ul'>
					<li class="match1" id='quiz-card'>
						<img src="/images/devnag/xsa.png" alt="xSha" class='mem-card-img'>
					</li>
					<li class="match2" id='quiz-card'>
						<img src="/images/devnag/sha.png" alt="Sha" class='mem-card-img'>
					</li>
					<li class="match1" id='quiz-card'>
						xSha
					</li>
					<li class="match2" id='quiz-card'>
						Sha
					</li>
					<li class="match3" id='quiz-card'>
						<img src="/images/devnag/sa.png" alt="Sa" class='mem-card-img'>
					</li>
					<li class="match4" id='quiz-card'>
						<img src="/images/devnag/ha.png" alt="Ha" class='mem-card-img'>
					</li>
					<li class="match3" id='quiz-card'>
						Sa
					</li>
					<li class="match4" id='quiz-card'>
						Ha
					</li>
				</ul>
			</div>

			<div class="both-button-div">
				<!-- Form for posting data to advance to next level and the score -->
				<form action="/pariksa/p_complete_game/" method='POST'>
					<!-- Next level data -->
					<input type="hidden" name='tattva' value='11'>
					<!-- The score data: javascript feeds data from jquery.quizmemorygame.js to the blank value, php then reads it from here in the post action -->
					<input type="hidden" name='score' class='score-holder' value=''>
					<!-- the continue button -->
					<div id="continue-button-div">
						<input type='submit' value='Finish!' class='score-stop'>
					</div>
				</form>

				<div id="cheat-dialog" title="Level Eleven: Cheat Sheet">
					<img src="/images/cheat_spirants.png" alt="">
				</div>

			</div>

			<br><br>

			<!-- the visual progress bar -->
			<div class='progress-bar-div'>
				<div class='top-progress-bar'>
					<ul class='progress-bar'>
						<li>
							<img src="/images/devnag/one.png" alt="one" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/six.png" alt="six" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/vowel_a.png" alt="vowel a" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/vowel_e.png" alt="vowel e" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/ka.png" alt="ka" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/ca.png" alt="ca" id='progress-past'>
						</li>
					</ul>
				</div>
				<div class="bottom-progress-bar">
					<ul class='progress-bar'>
						<li>
							<img src="/images/devnag/xta.png" alt="xta" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/ta.png" alt="ta" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/pa.png" alt="pa" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/ya.png" alt="ya" id='progress-past'>
						</li>
						<li>
							<img src="/images/devnag/sha.png" alt="sha" id='progress-current'>
						</li>
					</ul>
				</div>
			</div>

			<br><br><br>

		</div>

	<!-- if user is not logged ask them to login or signup -->
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