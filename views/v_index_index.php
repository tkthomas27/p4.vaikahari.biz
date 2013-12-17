
<!-- if user is logged in, then display welcome message -->
<?php if ($user): ?>

	<!-- landing page title -->
	<div class='title'>

		<span class='main-title'>Devanagari <br> Pariksha</span>

		<br>

		<a href="#" class='instructions'>Instructions</a>

		<br><br>

	</div>
		

		<div class="main-select-div">

		 	<!-- form for accepting the level select data; tattvas are hardcoded into each selection -->
			<form action="/pariksa/p_init_game" method='POST' class='select-form'>
				<fieldset>

					<legend data-intro="Select a level to begin your test - you must continue to the end from where you choose to begin" data-position="right">Select your Level!</legend>
					
					<!-- each level selction is a radio button -->
					<label class="devata-radio" for="one-devata" id='one-level'>
						<input id="one-devata" type="radio" name="tattva" class='trigger' data-rel='one-desktop' value="1"/>
						<img src="/images/devnag/one.png" class="thumbnail">
					</label>

					<label class="devata-radio" for="two-devata">
						<input id="two-devata" type="radio" name="tattva" class='trigger' data-rel='two-desktop' value="2"/>
						<img src="/images/devnag/six.png" class="thumbnail">
					</label>

					<label class="devata-radio" for="three-devata">
						<input id="three-devata" type="radio" name="tattva" class='trigger' data-rel='three-desktop'  value="3"/>
						<img src="/images/devnag/vowel_a.png" class="thumbnail">
					</label>

					<label class="devata-radio" for="four-devata">
						<input id="four-devata" type="radio" name="tattva" class='trigger' data-rel='four-desktop'  value="4"/>
						<img src="/images/devnag/vowel_e.png" class="thumbnail">
					</label>

					<label class="devata-radio" for="five-devata">
						<input id="five-devata" type="radio" name="tattva" class='trigger' data-rel='five-desktop' value="5"/>
						<img src="/images/devnag/ka.png" class="thumbnail">
					</label>

					<label class="devata-radio" for="six-devata">
						<input id="six-devata" type="radio" name="tattva" class='trigger' data-rel='six-desktop' value="6"/>
						<img src="/images/devnag/ca.png" class="thumbnail">
					</label>

					<br>

					<!-- hidden descriptions that appear when each radio button is selected -->
					<div class="select-descp">

						<div class="level-descp">
							<div class="one-desktop content">
								<div class="level-descp-text">
									Level One: Numbers 1-5
								</div>
							</div>
						</div>

						<div class="level-descp">
							<div class="two-desktop content">
								<div class="level-descp-text">
									Level Two: Numbers 6-9
								</div>
							</div>
						</div>

						<div class="level-descp">
							<div class="three-desktop content">
								<div class="level-descp-text">
									Level Three: Simple Vowels
								</div>
							</div>
						</div>

						<div class="level-descp">
							<div class="four-desktop content">
								<div class="level-descp-text">
									Level Four: Complex Vowels
								</div>
							</div>
						</div>

						<div class="level-descp">
							<div class="five-desktop content">
								<div class="level-descp-text">
									Level Five: Velar Consonants
								</div>
							</div>
						</div>

						<div class="level-descp">
							<div class="six-desktop content">
								<div class="level-descp-text">
									Level Six: Palatal Consonants
								</div>
							</div>
						</div>

						<div class="level-descp">
							<div class="seven-desktop content">
								<div class="level-descp-text">
									Level Seven: Retroflex Consonants
								</div>
							</div>
						</div>

						<div class="level-descp">
							<div class="eight-desktop content">
								<div class="level-descp-text">
									Level Eight: Dental Consonants
								</div>
							</div>
						</div>

						<div class="level-descp">
							<div class="nine-desktop content">
								<div class="level-descp-text">
									Level Nine: Labial Consonants
								</div>
							</div>
						</div>

						<div class="level-descp">
							<div class="ten-desktop content">
								<div class="level-descp-text">
									Level Ten: Semi-vowels
								</div>
							</div>
						</div>

						<div class="level-descp">
							<div class="eleven-desktop content">
								<div class="level-descp-text">
									Level Eleven: Spirants
								</div>
							</div>
						</div>

					</div>

					<label class="devata-radio" for="seven-devata">
						<input id="seven-devata" type="radio" name="tattva" class='trigger' data-rel='seven-desktop' value="7"/>
						<img src="/images/devnag/xta.png" class="thumbnail">
					</label>

					<label class="devata-radio" for="eight-devata">
						<input id="eight-devata" type="radio" name="tattva" class='trigger' data-rel='eight-desktop' value="8"/>
						<img src="/images/devnag/ta.png" class="thumbnail">
					</label>

					<label class="devata-radio" for="nine-devata">
						<input id="nine-devata" type="radio" name="tattva" class='trigger' data-rel='nine-desktop' value="9"/>
						<img src="/images/devnag/pa.png" class="thumbnail">
					</label>

					<label class="devata-radio" for="ten-devata">
						<input id="ten-devata" type="radio" name="tattva" class='trigger' data-rel='ten-desktop' value="10"/>
						<img src="/images/devnag/ya.png" class="thumbnail">
					</label>

					<label class="devata-radio" for="eleven-devata">
						<input id="eleven-devata" type="radio" name="tattva" class='trigger' data-rel='eleven-desktop' value="11"/>
						<img src="/images/devnag/sha.png" class="thumbnail">
					</label>
				</fieldset>

				<br>

				<input type="submit" value='Start Game  &rarr;' class='continue-button'>
				
			</form>

		</div>

		<br><br>


<!-- if user is not logged ask them to login or signup -->
<?php else: ?>

		<div class="landing-nouser">
			<fieldset>
				<legend>भो:! Welcome! भो:!</legend>
				
					<p class='intro'>
						For centuries, Devanagari (देवनागरी) has been the primary script for billions across South Asia. Devanagari Pariksha (Devanagari test) is your first step towards accessing South Asia's rich textual and cultural traditions. The test format is a memory card flipping game. For each round, you start with 1000 points and lose points for every second and click it takes to complete the page. Efficiency and quickness are the key to learning!
					</p>

					<br>

					<a href='/users/signup' class='continue-button' data-intro="If this is your first time, please login so you can track your progress" data-position="left">Sign Up</a>   <a href='/users/login' class='continue-button' data-intro="If you have been here before, please log in" data-position="right">Log In</a>
			
			</fieldset>
		</div>

<?php endif; ?>