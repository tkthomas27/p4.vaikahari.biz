	
	<!-- if user is logged in, allow them to change profile and password -->
	<?php if(isset($user)): ?>

		<!-- profile editor head -->
		<div class='proedithead'>

		Editing Profile for <?=$user->first_name?> <?=$user->last_name?>

		</div>

		<!-- profile editor form -->
		<form class='profileedit' method='POST' action='/users/p_profileedit'>

		<fieldset class='location-select-field'>
			<legend>Enter your Location</legend>
		<div class="location-edit">
			City <input type='text' name='city'><br>
			State <input type='text' name='state'><br>
		</div>
		</fieldset>

		<br><br>
		<fieldset class='avatara-select-field'>
			<legend>Select Your avatara</legend>
		<div class="avatara-select"> 
			<label class="avatara-radio" for="matsya-avatara">
				<input id="matsya-avatara" type="radio" name="avatara-radio" class='trigger' data-rel='matsya-desktop' value="/images/matsya_avatara.jpg"/>
				<img src="/images/matsya_avatara.jpg" class="thumbnail">
			</label>

			<label class="avatara-radio" for="kurma-avatara">
				<input id="kurma-avatara" type="radio" name="avatara-radio" class='trigger' data-rel='kurma-desktop' value="/images/kurma_avatara.jpg"/>
				<img src="/images/kurma_avatara.jpg" class="thumbnail">
			</label>

			<label class="avatara-radio" for="varaha-avatara">
				<input id="varaha-avatara" type="radio" name="avatara-radio" class='trigger' data-rel='varaha-desktop' value="/images/varaha_avatara.jpg"/>
				<img src="/images/varaha_avatara.jpg" class="thumbnail">
			</label>

			<label class="avatara-radio" for="narasimha-avatara">
				<input id="narasimha-avatara" type="radio" name="avatara-radio" class='trigger' data-rel='narasimha-desktop' value="/images/narasimha_avatara.jpg"/>
				<img src="/images/narasimha_avatara.jpg" class="thumbnail">
			</label>

			<label class="avatara-radio" for="vamana-avatara">
				<input id="vamana-avatara" type="radio" name="avatara-radio" class='trigger' data-rel='vamana-desktop' value="/images/vamana_avatara.jpg"/>
				<img src="/images/vamana_avatara.jpg" class="thumbnail">
			</label>
			<br>
			<label class="avatara-radio" for="parashurama-avatara">
				<input id="parashurama-avatara" type="radio" name="avatara-radio" class='trigger' data-rel='parashurama-desktop' value="/images/parashurama_avatara.jpg"/>
				<img src="/images/parashurama_avatara.jpg" class="thumbnail">
			</label>

			<label class="avatara-radio" for="rama-avatara">
				<input id="rama-avatara" type="radio" name="avatara-radio" class='trigger' data-rel='rama-desktop' value="/images/rama_avatara.jpg"/>
				<img src="/images/rama_avatara.jpg" class="thumbnail">
			</label>

			<label class="avatara-radio" for="krishna-avatara">
				<input id="krishna-avatara" type="radio" name="avatara-radio" class='trigger' data-rel='krishna-desktop' value="/images/krishna_avatara.jpg"/>
				<img src="/images/krishna_avatara.jpg" class="thumbnail">	
			</label>

			<label class="avatara-radio" for="buddha-avatara">
				<input id="buddha-avatara" type="radio" name="avatara-radio" class='trigger' data-rel='buddha-desktop' value="/images/buddha_avatara.jpg"/>
				<img src="/images/buddha_avatara.jpg" class="thumbnail">
			</label>

			<label class="avatara-radio" for="kalki-avatara">
				<input id="kalki-avatara" type="radio" name="avatara-radio" class='trigger' data-rel='kalki-desktop' value="/images/kalki_avatara.jpg"/>
				<img src="/images/kalki_avatara.jpg" class="thumbnail">
			</label>
		</div>
		</fieldset>
		<br><br>

		<fieldset class='avatara-select-field'>
			<legend>Select Your Ishta Devata</legend>
		<div class="devata-select"> 
			<label class="devata-radio" for="vishnu-devata">
				<input id="vishnu-devata" type="radio" name="devata-radio" class='vishnu trigger' data-rel='vishnu-desktop' value="/images/vishnu_devata.jpg"/>
				<img src="/images/vishnu_devata.jpg" class="thumbnail">
			</label>

			<label class="devata-radio" for="shiva-devata">
				<input id="shiva-devata" type="radio" name="devata-radio" class='shiva trigger' data-rel='shiva-desktop' value="/images/shiva_devata.jpg"/>
				<img src="/images/shiva_devata.jpg" class="thumbnail">
			</label>

			<label class="devata-radio" for="ganesha-devata">
				<input id="ganesha-devata" type="radio" name="devata-radio" class='ganesha trigger' data-rel='ganesha-desktop' value="/images/ganesha_devata.jpg"/>
				<img src="/images/ganesha_devata.jpg" class="thumbnail">
			</label>

			<label class="devata-radio" for="devi-devata">
				<input id="devi-devata" type="radio" name="devata-radio" class='devi trigger' data-rel='devi-desktop' value="/images/devi_devata.jpg"/>
				<img src="/images/devi_devata.jpg" class="thumbnail">
			</label>

			<label class="devata-radio" for="surya-devata">
				<input id="surya-devata" type="radio" name="devata-radio" class='surya trigger' data-rel='surya-desktop' value="/images/surya_devata.jpg"/>
				<img src="/images/surya_devata.jpg" class="thumbnail">
			</label>
		</div>
		</fieldset>

		<br><br>

		<div class="avatara-descp">
			<div class="matsya-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/matsya_avatara.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
			<div class="kurma-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/kurma_avatara.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
			<div class="varaha-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/varaha_avatara.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
			<div class="narasimha-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/narasimha_avatara.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
			<div class="vamana-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/vamana_avatara.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
			<div class="parashurama-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/parashurama_avatara.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>	
			<div class="rama-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/rama_avatara.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
			<div class="krishna-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/krishna_avatara.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>	
			<div class="buddha-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/buddha_avatara.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
			<div class="kalki-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/kalki_avatara.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
			<div class="vishnu-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/vishnu_devata.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
			<div class="shiva-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/shiva_devata.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
			<div class="ganesha-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/ganesha_devata.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
			<div class="devi-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/devi_devata.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
			<div class="surya-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/surya_devata.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
		</div>

		<br><br>


		<br><br>

			<input type='submit' value='Submit Edit' class='proeditsubmit'>

		</form>

		<br><br><br><br>


	<!-- if user is not logged, ask them to sign up or log in -->
	<?php else: ?>

		<div class="nouser">

			Please sign up or log in

		</div>

	<?php endif; ?>