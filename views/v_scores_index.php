
<?php if ($user): ?>

<div class='score-div'>
	<div class="score-title">
		<span class='score-title-span'>Score Table</span>
	</div>

<table cellpadding="0" cellspacing="0" border="0" class="display" id="example" width="100%">
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Date Played</th>
			<th>Score</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($scores as $score): ?>
		<tr class="odd gradeX">
			<td><?=$score['first_name']?></td>
			<td><?=$score['last_name']?></td>
			<td><time datetime="<?=Time::display($score['date_play'],'Y-m-d G:i')?>">
				<?=Time::display($score['date_play'])?>
				</time></td>
			<td><?=$score['score']?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
	<tfoot>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Date Played</th>
			<th>Score</th>
		</tr>
	</tfoot>
</table>

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

	<?php endif; ?>