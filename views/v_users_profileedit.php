	
	<!-- if user is logged in, allow them to change profile and password -->
	<?php if(isset($user)): ?>

		<a href="/users/pwdchange">Password Change</a>

		<!-- profile editor form -->
		<form class='profileedit' method='POST' action='/users/p_profileedit'>

		<fieldset class='location-select-field'>
			<legend>Enter your Location</legend>
		<div class="location-edit">
			City (Optional): <input name='city' maxlength='20'>
			<br>
			State (Optional): <select name='state'>
				<option value="AL">Alabama</option>
				<option value="AK">Alaska</option>
				<option value="AZ">Arizona</option>
				<option value="AR">Arkansas</option>
				<option value="CA">California</option>
				<option value="CO">Colorado</option>
				<option value="CT">Connecticut</option>
				<option value="DE">Delaware</option>
				<option value="DC">District Of Columbia</option>
				<option value="FL">Florida</option>
				<option value="GA">Georgia</option>
				<option value="HI">Hawaii</option>
				<option value="ID">Idaho</option>
				<option value="IL">Illinois</option>
				<option value="IN">Indiana</option>
				<option value="IA">Iowa</option>
				<option value="KS">Kansas</option>
				<option value="KY">Kentucky</option>
				<option value="LA">Louisiana</option>
				<option value="ME">Maine</option>
				<option value="MD">Maryland</option>
				<option value="MA">Massachusetts</option>
				<option value="MI">Michigan</option>
				<option value="MN">Minnesota</option>
				<option value="MS">Mississippi</option>
				<option value="MO">Missouri</option>
				<option value="MT">Montana</option>
				<option value="NE">Nebraska</option>
				<option value="NV">Nevada</option>
				<option value="NH">New Hampshire</option>
				<option value="NJ">New Jersey</option>
				<option value="NM">New Mexico</option>
				<option value="NY">New York</option>
				<option value="NC">North Carolina</option>
				<option value="ND">North Dakota</option>
				<option value="OH">Ohio</option>
				<option value="OK">Oklahoma</option>
				<option value="OR">Oregon</option>
				<option value="PA">Pennsylvania</option>
				<option value="RI">Rhode Island</option>
				<option value="SC">South Carolina</option>
				<option value="SD">South Dakota</option>
				<option value="TN">Tennessee</option>
				<option value="TX">Texas</option>
				<option value="UT">Utah</option>
				<option value="VT">Vermont</option>
				<option value="VA">Virginia</option>
				<option value="WA">Washington</option>
				<option value="WV">West Virginia</option>
				<option value="WI">Wisconsin</option>
				<option value="WY">Wyoming</option>
				<option value="Non-USA">Non-USA</option>
			</select>				
		</div>
		</fieldset>

		<br><br>

		<fieldset class='avatara-select-field'>
			<legend>Select your Avatara </legend>
			<p id='select-intro'>Below are the Dasavatara (दशावतार)- the 10 Avataras of Vishnu. Choose one as your personal incarnation during your test</p>
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
			<legend>Select your Ishta Devata</legend>
			<p id='select-intro'>Choose your favored deity (इष्टदेवता) from the five form system of Shankaracarya for guidance during your test</p>
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

			<br>

			<div id="profileedit-button">
				<input type='submit' value='Submit Edit' class='continue-button'>
			</div>

		</form>

		<br><br>

		<div class="avatara-descp">
			<div class="matsya-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/matsya_avatara.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text" id='select-side-descp'>
					Matsya (मत्स्य): The first avatara of Vishnu, Matsya (literally meaning "fish") was a giant fish that rescued the hero Manu from
					the great flood that killed all living things. He is depicted either as a giant fish or as a half-man, half-fish with the half-man 
					portion representing Vishnu.  The basic story involving the forewarning of an impending flood, the salvation of a few in a boat, and 
					the rebirth of the world after the flood is a motif found throug in cultures vastly disparate areas of the world. The possibility of 
					potential connections between these stories has tantalized scholars for centuries.
				</div>
			</div>
			<div class="kurma-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/kurma_avatara.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text" id='select-side-descp'>
					Kurma (कुर्म): The second avatara of Vishnu, he was the turtle form taken on by Vishnu to aid in the churning of the ocean of milk (the 
					samudra mathan).  Having been cursed to lose their immortality by the irascible sage Durvasas, the gods sought the nectar of immortality
					(amrita) that lie at the bottom of the ocean.  To do so, they used Mount Mandara as a churning stick - supported by the turtle Kurma - 
					to churn the ocean and deliever up to the amrita.
				</div>
			</div>
			<div class="varaha-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/varaha_avatara.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text" id='select-side-descp'>
					Varaha (वराह): The third avatara of Vishnu is responsible for rescuing the world when it was cast into the primordial ocean by the demon
					Hiranyaksha. Havin insulted the devotees of Vishunu, Jaya and Vijaya, who are also the guardians of Vishnu, are reincarnatd as the
					 demons Hiranyaksha and Hiranyakshipu. Hiranyaksha casts the earth into the primordial ocean as vengenance. Vishnu then takes the 
					 form of a giant boar, slays Hiranyaksha, and raises the earth back to the heavens on his tusks.
				</div>
			</div>
			<div class="narasimha-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/narasimha_avatara.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text" id='select-side-descp'>
					Narasimha (नरसिंह): The fourth avatara of Vishnu, Narasimha (literally, "man-lion") is responsible for killing the demon Hiranyakshipu.
					Having heard of the death of his brother at the hands of Vishnu, Hiranyakshipu practices tapas to obtain the boon of not being killed 
					by any man nor animal and declares war on all things Vishnu including his own son Prahlada.  When he goes to kill his son Prahlada, 
					Vishnu appears as Narasimha (neither man nor animal) and slays Hiranyakshipu.
				</div>
			</div>
			<div class="vamana-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/vamana_avatara.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text" id='select-side-descp'>
					Vamana (वामन): The fifth avatara of Vishnu, Vamana reclaimed the world for the gods after it had been taken over by the benevolent but 
					demonic king Mahabali, the grandson of Prahlada.  Visiting Mahabali, Vishnu took the form of a dwarf Vamana and requested ownership of all
					the land we could walk over in three strides. Mahabali consented and Vamana grew to huge proportions and strode across the universe in
					two steps.
				</div>
			</div>
			<div class="parashurama-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/parashurama_avatara.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text" id='select-side-descp'>
					Parashurama (परशुराम): The sixth avatara of Vishnu, Parashurama ('Axe-Rama') was an immortal warrior who killed all the kshatriyas (kings) 21 times over.
					During the time of Parashurama, kshatriyas were incredibly powerful and oppressive. The most powerful one, Kartavirya, stole Parashurama's sacred cow.
					Parashurama killed Kartavirya and in retaliation the other kshatriyas killed Parashurama's father. Enraged, Parashurama proceed to hunt down and kill
					all the kshatriyas he could find.
				</div>
			</div>	
			<div class="rama-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/rama_avatara.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text" id='select-side-descp'>
					Rama (राम): The seventh avatara of Vishnu, Rama is most well known as the hero of the Ramayana. In his relentless adherence to Dharma, 
					Rama is considered to be the paragon of human conduct and kingly virtue. Upholding the ancient promises of his father, Rama relinquishes
					his claim on the throne and goes into exile. While in the forest, his wife is captured by the demon king Ravana. With his brother Lakshmana 
					and the monkey warrior Hanuman, Rama slays Ravana and returns home as king along with Sita.
				</div>
			</div>
			<div class="krishna-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/krishna_avatara.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text" id='select-side-descp'>
					Krishna (कृष्ण): The eighth avatara of Vishnu, Krishna is the full incarnation of Vishnu. In his youth, Krishna's mischief as a child and
					dalliances with the wives of the cow herders as a youth exemplify divine play and the longing devotion of his followers. His most famous act is revealing
					his universal form (visvarupa) to Arjuna in the Mahabharata while exhorting Arjuna to follow his personal dharma as a warrior. This 
					episode is the world famous Bhagavad Gita.
				</div>
			</div>	
			<div class="buddha-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/buddha_avatara.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text" id='select-side-descp'>
					Buddha (बुद्ध): The ninth avatara of Vishnu is, with some controversy, the Buddha. There is some confusion particularly regarding the
					name of the Buddha which can simply be a title for someone possessed of wisdom. However, there are some claims that Siddhartha Gautama,
					the Buddha of Buddhism, is an avatara of Vishnu. Why and when this became the case have been debated for centuries and continue to be so today.
				</div>
			</div>
			<div class="kalki-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/kalki_avatara.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text" id='select-side-descp'>
					Kalki (कल्कि): The tenth and final avatara of Vishnu, Kalki has not yeat appeared and when he arrives he will usher in the end of the current
					world.  He is traditionally depicted astride a white horse and brandishing a flaming sword in his left hand.
				</div>
			</div>
			<div class="vishnu-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/vishnu_devata.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text" id='select-side-descp'>
					Vishnu (विष्णु): Vishnu enjoys a rich and varied legacy in South and Southeast Asia. He is identified as the supreme lord of everything and all
					pervasive in everything in the Vaishnava tradition.  He is often depicted reclining on the celestial serpent who floats on the cosmic ocean of milk with the dreams of Vishnu
					emanating the universe.  In his four arms he is seen carrying a conch, a throwing disc, a mace, and a lotus.
				</div>
			</div>
			<div class="shiva-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/shiva_devata.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text" id='select-side-descp'>
					Shiva (शिव): Shiva is an extremely popular deity who is considered the supreme god in Shaiva traditions. Shiva has exprienced a long evolution
					over the centuries from the Vedic Rudra to the Smarta ascetic. While Vishnu is often considered the preserver, Shiva is often cast as the destroyer
					whose cosmic dance will destroy the current universe.  He is often depicted as an ascetic with ragged hair meditating on a leopard's skin. In his
					hair is a crescent moon and from his hair glows the Ganga river.
				</div>
			</div>
			<div class="ganesha-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/ganesha_devata.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text" id='select-side-descp'>
					Ganesha (गणेश): Ganesha is a tremendously popular deity in South Asia who is seen as the remover of obstacles. In various stories he is the son
					of Shiva who he accidentally decapitated and then replaced his head with that of an elephant.  Ganesha is associated with mental agility, thus the 
					reason he is the transcriber of the epic Mahabharata.  Ganesha's birthday is celebrated with the massively popular Ganesh Cathurthi.
				</div>
			</div>
			<div class="devi-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/devi_devata.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text" id='select-side-descp'>
					Devi (देवी): Devi is the general term for the divine energy that animats all of the Hindu goddesses. One of the more popular aspects of Devi
					is the goddess Durga who was created by Shiva, Vishnu, and Brahma to defeat the demon Mahishasura. Her other forms of Kali, a blood thirsty
					yet motherly deity, and Parvati, the wife of Shiva, are also immensely popular. The celebration of Durga known as Durga Puja is an extensive festival
					celebrated throughout India.
				</div>
			</div>
			<div class="surya-desktop content">
				<div class="avatar-descp-img">
					<img src="/images/surya_devata.jpg" class="bigpic">
				</div>
				<div class="avatar-descp-text" id='select-side-descp'>
					Surya (शूर्य): Surya, meaning the Sun, has a close relationship to ancient solar forms of solar worship throughout Asia. Surya is the father
					of several prominent figure in Indian literature: Sugriva the monkey king from the Ramayana, Karna the great warrior from the Mahabharata, and 
					Manu the father of mankind falling the great deluge. 
				</div>
			</div>
		</div>

		<br>


	<!-- if user is not logged, ask them to sign up or log in -->
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

	<?php endif; ?>