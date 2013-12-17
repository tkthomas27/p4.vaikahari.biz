	<!-- if user is logged in, display their profile -->
<?php if ($user): ?>

	<!-- title for the faq -->
	<div class="faq-div">
		<span  class='score-title-span'>FAQ</span>
	</div>

	<!-- accordion for the each faq section -->
	<div id="accordion">
		
		<h3>What is Devanagari?</h3>
			<div>
				Devanagari is a primary script used worldwide to write Hindi, Sanskrit, and Neapalese.  It has its roots in the Brahmic scripts of 
				India which spread across Asia and even inspired Japanese Kanji.  
			</div>

		<h3>How do I pronounce Devanagari?</h3>
			<div>
				Devanagari is a abugida alphabet meaning that each consonant has an understood 'a' sound attached to it. The each character is 
				traditionally shown seen as falling into 5 categories: velar, palatal, retroflex (or cerebral), dental, or labial. Each of these
				categories correspond to where the sound emanates from your mouth: velar sounds come from the back of the throat, palatal come from 
				back roof of your mouth, retroflex from the forward roof of your mouth, dental come from the back of the teeth, and labial come from 
				the lips.
				<br>
				<img src="/images/devnag_map.png" class='devnag-map' alt="">
			</div>

		<h3>How to Pronounce Simple Vowels</h3>
			<div>
				Mauris mauris ante, blandit et, ultrices a, susceros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
				Simple Vowels:
				<ul>
					<li><img src="/images/devnag/vowel_a.png" class="help-img" alt='vowel a'> = a as in "a"head</li>
					<li><img src="/images/devnag/vowel_aa.png" class="help-img" alt='vowel aa'> =aa as in "a"rm</li>
					<li><img src="/images/devnag/vowel_i.png" class="help-img" alt='vowel i'> =i as in "i"t</li>
					<li><img src="/images/devnag/vowel_ii.png" class="help-img" alt='vowel ii'> =ii as in "i"f</li>
					<li><img src="/images/devnag/vowel_u.png" class="help-img" alt='vowel u'> =u as in p"u"t</li>
					<li><img src="/images/devnag/vowel_uu.png" class="help-img" alt='vowel uu'> =uu as in sp"oo"n</li>
					<li><img src="/images/devnag/vowel_r.png" class="help-img" alt='vowel r'> =r as in "ri"ddle</li>
					<li><img src="/images/devnag/vowel_rr.png" class="help-img" alt='vowel rr'> =rr as in "ree"d</li>
					<li><img src="/images/devnag/vowel_lr.png" class="help-img" alt='vowel lr'> =lr a l sound attached to r</li>
				</ul>
			</div>

		<h3>How to Pronounce Complex Vowels</h3>
			<div>	
				Complex Vowels:
				<ul>
					<li><img src="/images/devnag/vowel_e.png" class="help-img" alt='vowel e'> = e as in "a"ge</li>
					<li><img src="/images/devnag/vowel_ai.png" class="help-img" alt='vowel ai'> = ai pronounced as eye</li>
					<li><img src="/images/devnag/vowel_o.png" class="help-img" alt='vowel o'> = o as in g"o"</li>
					<li><img src="/images/devnag/vowel_au.png" class="help-img" alt='vowel au'> = au pronounced as Ow</li>
				</ul>
			</div>

		<h3>How to Pronounce Velar Consonants </h3>
			<div>
			Velar Consonants:
				<ul>
					<li><img src="/images/devnag/ka.png" class="help-img" alt='ka'> = ka as in "ca"rpet</li>
					<li><img src="/images/devnag/kha.png" class="help-img" alt='kha'> = kha as in "kha"ki</li>
					<li><img src="/images/devnag/ga.png" class="help-img" alt='ga'> = ga as in "g"um</li>
					<li><img src="/images/devnag/gha.png" class="help-img" alt='gha'> = gha as in "gh"ost</li>
					<li><img src="/images/devnag/na_velar.png" class="help-img" alt='na'> = na as in bri"ng"</li>
				</ul>
			</div>

		<h3>How to Pronounce Palatal Consonants</h3>
			<div>
				Palatal Consonants:
				<ul>
					<li><img src="/images/devnag/ca.png" class="help-img" alt='ca'> = ca as in "ch"uck</li>
					<li><img src="/images/devnag/cha.png" class="help-img" alt='cha'> = cha as in "ch"arge</li>
					<li><img src="/images/devnag/ja.png" class="help-img" alt='ja'> = ja as in "j"ug</li>
					<li><img src="/images/devnag/jha.png" class="help-img" alt='jha'> = jha as in hed"gheh"og</li>
					<li><img src="/images/devnag/na_palatal.png" class="help-img" alt='na'> = na as in ca"ny"on</li>
				</ul>	
			</div>

		<h3>How to Pronounce Retroflex Vowels</h3>
			<div>
				Retroflex Vowels:
				<ul>
					<li><img src="/images/devnag/xta.png" class="help-img" alt='xTa'> = xTa as in ca"rt"</li>
					<li><img src="/images/devnag/xtha.png" class="help-img" alt='xTha'> = xTha as in hea"rt-h"eavy</li>
					<li><img src="/images/devnag/xda.png" class="help-img" alt='xDa'> = xDa as in "d"ove</li>
					<li><img src="/images/devnag/xdha.png" class="help-img" alt='xDha'> = xDha as in re"d-h"ot</li>
					<li><img src="/images/devnag/na_retro.png" class="help-img" alt='na'> = na as rna</li>
				</ul>
			</div>

		<h3>How to Pronounce Dental Consonants</h3>
			<div>
				Dental Consonants:
				<ul>
					<li><img src="/images/devnag/ta.png" class="help-img" alt='ta'> = ta as in "t"iger</li>
					<li><img src="/images/devnag/tha.png" class="help-img" alt='tha'> = tha as in lig"th-h"eart</li>
					<li><img src="/images/devnag/da.png" class="help-img" alt='da'> = da as in "d"own</li>
					<li><img src="/images/devnag/dha.png" class="help-img" alt='dha'> = dha as in "d"oughnut</li>
					<li><img src="/images/devnag/na_dental.png" class="help-img" alt='na'> = na as in "n"o</li>
				</ul>
			</div>

		<h3>How to Pronounce Labial Consonants</h3>
			<div>
				Labial Consonants:
				<ul>
					<li><img src="/images/devnag/pa.png" class="help-img" alt='pa'> = pa as in pi"p"e</li>
					<li><img src="/images/devnag/pha.png" class="help-img" alt='pha'> = pha as in u"ph"ill</li>
					<li><img src="/images/devnag/ba.png" class="help-img" alt='ba'> = ba as in "b"ird</li>
					<li><img src="/images/devnag/bha.png" class="help-img" alt='bha'> = bha as in ru"b-h"ard</li>
					<li><img src="/images/devnag/ma.png" class="help-img" alt='ma'> = ma as in "m"other</li>
				</ul>
			</div>

		<h3>How to Pronounce Semi-vowels</h3>
			<div>
				Semi-vowels:
				<ul>
					<li><img src="/images/devnag/ya.png" class="help-img" alt='ya'> = ya as in "y"es</li>
					<li><img src="/images/devnag/ra.png" class="help-img" alt='ra'> = ra as in "r"un</li>
					<li><img src="/images/devnag/la.png" class="help-img" alt='la'> = la as in "l"ight</li>
					<li><img src="/images/devnag/va.png" class="help-img" alt='va'> = va as in "v"ine</li>
				</ul>
			</div>

		<h3>How to Pronounce Spirants</h3>
			<div>
				Spirants:
				<ul>
					<li><img src="/images/devnag/sha.png" class="help-img" alt='sha'> = sha as in "s"prechen</li>
					<li><img src="/images/devnag/xsa.png" class="help-img" alt='xSha'> = xSha as in cra"sh"ed</li>
					<li><img src="/images/devnag/sa.png" class="help-img" alt='sa'> = sa as in "s"nake</li>
					<li><img src="/images/devnag/ha.png" class="help-img" alt='ha'> = ha as in "h"ome</li>
				</ul>
			</div>
	</div>

	<br><br><br><br>

<!-- else ask them to sign up or log in -->
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
