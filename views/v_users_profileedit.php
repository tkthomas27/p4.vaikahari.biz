	
	<!-- if user is logged in, allow them to change profile and password -->
	<?php if(isset($user)): ?>

		<!-- profile editor head -->
		<div class='proedithead'>

		Editing Profile for <?=$user->first_name?> <?=$user->last_name?>

		</div>

		<!-- profile editor form -->
		<form class='profileedit' method='POST' action='/users/p_profileedit'>

			Location <input type='text' name='location'><br>

			<input type='submit' value='Submit Edit' class='proeditsubmit'>

		</form>

		<br><br>
		Select Your Avatar (insert question mark for explanation)
		<div class="avatar-select" sytle:'display:none'> 
			<label class="avatar-radio" for="matsya-avatar">
				<input id="matsya-avatar" type="radio" name="avatar-radio" value="big" class='matsya trigger' data-rel='matsya-desktop'/>
				<img src="/images/matsya_avatar.jpg" class="thumbnail">
			</label>

			<label class="avatar-radio" for="kurma-avatar">
				<input id="kurma-avatar" type="radio" name="avatar-radio" value="big" class='kurma trigger' data-rel='kurma-desktop' />
				<img src="/images/kurma_avatara.jpg" class="thumbnail">
			</label>

			<label class="avatar-radio" for="varaha-avatar">
				<input id="varaha-avatar" type="radio" name="avatar-radio" value="big" class='varaha trigger' data-rel='varaha-desktop'/>
				<img src="/images/varaha_avatara.jpg" class="thumbnail">
			</label>

			<label class="avatar-radio" for="narasimha-avatar">
				<input id="narasimha-avatar" type="radio" name="avatar-radio" value="big" class='narasimha trigger' data-rel='narasimha-desktop'/>
				<img src="/images/narasimha_avatara.jpg" class="thumbnail">
			</label>

			<label class="avatar-radio" for="vamana-avatar">
				<input id="vamana-avatar" type="radio" name="avatar-radio" value="big" class='vamana trigger' data-rel='vamana-desktop'/>
				<img src="/images/vamana_avatara.jpg" class="thumbnail">
			</label>

			<label class="avatar-radio" for="parashurama-avatar">
				<input id="parashurama-avatar" type="radio" name="avatar-radio" value="big" class='parashurama trigger' data-rel='parashurama-desktop'/>
				<img src="/images/parashurama_avatara.jpg" class="thumbnail">
			</label>

			<label class="avatar-radio" for="rama-avatar">
				<input id="rama-avatar" type="radio" name="avatar-radio" value="big" class='rama trigger' data-rel='rama-desktop'/>
				<img src="/images/rama_avatara.jpg" class="thumbnail">
			</label>

			<label class="avatar-radio" for="krishna-avatar">
				<input id="krishna-avatar" type="radio" name="avatar-radio" value="big" class='krishna trigger' data-rel='krishna-desktop'/>
				<img src="/images/krishna_avatara.jpg" class="thumbnail">	
			</label>

			<label class="avatar-radio" for="buddha-avatar">
				<input id="buddha-avatar" type="radio" name="avatar-radio" value="big" class='buddha trigger' data-rel='buddha-desktop'/>
				<img src="/images/buddha_avatara.jpg" class="thumbnail">
			</label>

			<label class="avatar-radio" for="kalki-avatar">
				<input id="kalki-avatar" type="radio" name="avatar-radio" value="big" class='kalki trigger' data-rel='kalki-desktop'/>
				<img src="/images/kalki_avatara.jpg" class="thumbnail">
			</label>
		</div>

		<br><br>

		<div class="avatar-descp">
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
			<label class="devata-radio" for="vishnu-avatar">
				<input id="vishnu-avatar" type="radio" name="devata-radio" value="big" class='vishnu trigger' data-rel='vishnu-desktop'/>
				<img src="/images/vishnu_devata.jpg" class="thumbnail">
			</label>

			<label class="devata-radio" for="shiva-avatar">
				<input id="shiva-avatar" type="radio" name="devata-radio" value="big" class='shiva trigger' data-rel='shiva-desktop' />
				<img src="/images/shiva_devata.jpg" class="thumbnail">
			</label>

			<label class="devata-radio" for="ganesha-avatar">
				<input id="ganesha-avatar" type="radio" name="devata-radio" value="big" class='ganesha trigger' data-rel='ganesha-desktop'/>
				<img src="/images/ganesha_devata.jpg" class="thumbnail">
			</label>

			<label class="devata-radio" for="devi-avatar">
				<input id="devi-avatar" type="radio" name="devata-radio" value="big" class='devi trigger' data-rel='devi-desktop'/>
				<img src="/images/devi_devata.jpg" class="thumbnail">
			</label>

			<label class="devata-radio" for="surya-avatar">
				<input id="surya-avatar" type="radio" name="devata-radio" value="big" class='surya trigger' data-rel='surya-desktop'/>
				<img src="/images/surya_devata.jpg" class="thumbnail">
			</label>
		</div>

		<br><br>

		<div class="avatar-descp">
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