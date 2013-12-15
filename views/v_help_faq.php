	<!-- if user is logged in, display their profile -->
	<?php if ($user): ?>

<div class="faq-div">
<span  class='score-title-span'>FAQ</span>
</div>

<div id="accordion">
	<h3>What is Devanagari?</h3>
		<div>
			Devanagari is a primary script used in India and Nepal to write Hindi, Sanskrit, and Neaplese.  It has its roots in the Brahmic scripts of 
			India which spread across Asia and even inspired Japanese Kanji.
		</div>
	<h3>How do I pronounce Devanagari?</h3>
		<div>
			Devanagari is a abugida alphabet meaning that each consonant has an understood 'a' sound attached to it.
		</div>
	<h3>How to Pronounce Simple Vowels</h3>
		<div>
			Mauris mauris ante, blandit et, ultrices a, susceros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
			Simple Vowels:
			<ul>
				<li>a as in 'a'head</li>
				<li>aa as in 'a'rm</li>
				<li>i as in 'i't</li>
				<li>ii as in 'i'f</li>
				<li>u as in p'u't</li>
				<li>uu as in sp'oo'n</li>
				<li>r as in 'ri'ddle</li>
				<li>rr as in 'ree'd</li>
				<li>lr a l sound attached to r</li>
			</ul>
		</div>
	<h3>How to Pronounce Complex Vowels</h3>
		<div>	
			Complex Vowels:
			<ul>
				<li>e as in 'a'ge</li>
				<li>ai pronounced as eye</li>
				<li>o as in g'o'</li>
				<li>au pronounced as Ow</li>
			</ul>
		</div>
	<h3>How to Pronounce Velar Consonants </h3>
		<div>
		Velar Consonants:
			<ul>
				<li>ka as in 'ca'rpet</li>
				<li>kha as in 'kha'ki</li>
				<li>ga as in 'g'um</li>
				<li>gha as in 'gh'ost</li>
				<li>na as in bri'ng'</li>
			</ul>
		</div>
	<h3>How to Pronounce Palatal Consonants</h3>
		<div>
			Palatal Consonants:
			<ul>
				<li>ca as in 'ch'uck</li>
				<li>cha as in 'ch'arge</li>
				<li>ja as in 'j'ug</li>
				<li>jha as in hed'gheh'og</li>
				<li>na as in ca'ny'on</li>
			</ul>	
		</div>
	<h3>How to Pronounce Retroflex Vowels</h3>
		<div>
			Retroflex Vowels:
			<ul>
				<li>xTa as in ca'rt'</li>
				<li>xTha as in hea'rt-h'eavy</li>
				<li>xDa as in 'd'ove</li>
				<li>xDha as in re'd-h'ot</li>
				<li>na as rna</li>
			</ul>
		</div>
	<h3>How to Pronounce Dental Consonants</h3>
		<div>
			Dental Consonants:
			<ul>
				<li>ta as in 't'iger</li>
				<li>tha as in lig'th-h'eart</li>
				<li>da as in 'd'own</li>
				<li>dha as in 'd'oughnut</li>
				<li>na as in 'n'o</li>
			</ul>
		</div>
	<h3>How to Pronounce Labial Consonants</h3>
		<div>
			Labial Consonants:
			<ul>
				<li>pa as in pi'p'e</li>
				<li>pha as in u'ph'ill</li>
				<li>ba as in 'b'ird</li>
				<li>bha as in ru'b-h'ard</li>
				<li>ma as in 'm'other</li>
			</ul>
		</div>
	<h3>How to Pronounce Semi-vowels</h3>
		<div>
			Semi-vowels:
			<ul>
				<li>ya as in 'y'es</li>
				<li>ra as in 'r'un</li>
				<li>la as in 'l'ight</li>
				<li>va as in 'v'ine</li>
			</ul>
		</div>
	<h3>How to Pronounce Spirants</h3>
		<div>
			Spirants:
			<ul>
				<li>sha as in 's'prechen</li>
				<li>xSha as in cra'sh'ed</li>
				<li>sa as in 's'nake</li>
				<li>ha as in 'h'ome</li>
			</ul>
		</div>
</div>

<br><br><br><br>

	<!-- else ask them to sign up or log in -->
	<?php else: ?>

		<div class="nouser">

			<!-- make these links -->
			Please sign up or log in

		</div>

	<?php endif; ?>
