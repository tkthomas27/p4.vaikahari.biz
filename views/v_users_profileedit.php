	
	<!-- if user is logged in, allow them to change profile and password -->
	<?php if(isset($user)): ?>

		<!-- profile editor head -->
		<div class='proedithead'>

		Editing Profile for <?=$user->first_name?> <?=$user->last_name?>

		</div>

		<!-- profile editor form -->
		<form class='profileedit' method='POST' action='/users/p_profileedit'>

			City <input type='text' name='city'><br>
			State <input type='text' name='state'><br>

		<br><br>
		Select Your avatara (insert question mark for explanation)
		<div class="avatara-select" sytle:'display:none'> 
			<label class="avatara-radio" for="matsya-avatara">
				<input id="matsya-avatara" type="radio" name="avatara-radio" class='matsya trigger' data-rel='matsya-desktop' value="/images/matsya_avatara.jpg"/>
				<img src="/images/matsya_avatara.jpg" class="thumbnail">
			</label>

			<label class="avatara-radio" for="kurma-avatara">
				<input id="kurma-avatara" type="radio" name="avatara-radio" class='kurma trigger' data-rel='kurma-desktop' value="/images/kurma_avatara.jpg"/>
				<img src="/images/kurma_avatara.jpg" class="thumbnail">
			</label>

			<label class="avatara-radio" for="varaha-avatara">
				<input id="varaha-avatara" type="radio" name="avatara-radio" class='varaha trigger' data-rel='varaha-desktop' value="/images/varaha_avatara.jpg"/>
				<img src="/images/varaha_avatara.jpg" class="thumbnail">
			</label>

			<label class="avatara-radio" for="narasimha-avatara">
				<input id="narasimha-avatara" type="radio" name="avatara-radio" class='narasimha trigger' data-rel='narasimha-desktop' value="/images/narasimha_avatara.jpg"/>
				<img src="/images/narasimha_avatara.jpg" class="thumbnail">
			</label>

			<label class="avatara-radio" for="vamana-avatara">
				<input id="vamana-avatara" type="radio" name="avatara-radio" class='vamana trigger' data-rel='vamana-desktop' value="/images/vamana_avatara.jpg"/>
				<img src="/images/vamana_avatara.jpg" class="thumbnail">
			</label>

			<label class="avatara-radio" for="parashurama-avatara">
				<input id="parashurama-avatara" type="radio" name="avatara-radio" class='parashurama trigger' data-rel='parashurama-desktop' value="/images/parashurama_avatara.jpg"/>
				<img src="/images/parashurama_avatara.jpg" class="thumbnail">
			</label>

			<label class="avatara-radio" for="rama-avatara">
				<input id="rama-avatara" type="radio" name="avatara-radio" class='rama trigger' data-rel='rama-desktop' value="/images/rama_avatara.jpg"/>
				<img src="/images/rama_avatara.jpg" class="thumbnail">
			</label>

			<label class="avatara-radio" for="krishna-avatara">
				<input id="krishna-avatara" type="radio" name="avatara-radio" class='krishna trigger' data-rel='krishna-desktop' value="/images/krishna_avatara.jpg"/>
				<img src="/images/krishna_avatara.jpg" class="thumbnail">	
			</label>

			<label class="avatara-radio" for="buddha-avatara">
				<input id="buddha-avatara" type="radio" name="avatara-radio" class='buddha trigger' data-rel='buddha-desktop' value="/images/buddha_avatara.jpg"/>
				<img src="/images/buddha_avatara.jpg" class="thumbnail">
			</label>

			<label class="avatara-radio" for="kalki-avatara">
				<input id="kalki-avatara" type="radio" name="avatara-radio" class='kalki trigger' data-rel='kalki-desktop' value="/images/kalki_avatara.jpg"/>
				<img src="/images/kalki_avatara.jpg" class="thumbnail">
			</label>
		</div>

		<br><br>

		<div class="avatara-descp">
			<div class="matsya-desktop content">
				some info on matsya
			</div>
			<div class="kurma-desktop content">
				some info on kurma
			</div>
			<div class="varaha-desktop content">
				some info on varaha
			</div>
			<div class="narasimha-desktop content">
				some info on narasimha
			</div>
			<div class="vamana-desktop content">
				some info on vamana
			</div>
			<div class="parashurama-desktop content">
				some info on parashurama
			</div>	
			<div class="rama-desktop content">
				some info on rama
			</div>
			<div class="krishna-desktop content">
				some info on krishna
			</div>	
			<div class="buddha-desktop content">
				some info on buddha
			</div>
			<div class="kalki-desktop content">
				some info on kalki
			</div>	
		</div>

		<br><br>

		Select Your Ishta Devata (insert question mark for explanation)
		<div class="devata-select" sytle:'display:none'> 
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

		<br><br>

		<div class="devata-descp">
			<div class="vishnu-desktop content">
				some info on vishnu
			</div>
			<div class="shiva-desktop content">
				some info on shiva
			</div>
			<div class="ganesha-desktop content">
				some info on ganesha
			</div>
			<div class="devi-desktop content">
				some info on devi
			</div>
			<div class="surya-desktop content">
				some info on surya
			</div>

		</div>

		<br><br>

			<input type='submit' value='Submit Edit' class='proeditsubmit'>

		</form>


	<!-- if user is not logged, ask them to sign up or log in -->
	<?php else: ?>

		<div class="nouser">

			Please sign up or log in

		</div>

	<?php endif; ?>