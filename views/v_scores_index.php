
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

		<div class="landing-user">

			Please <a href='/users/signup'>Sign Up</a> <br>
			or <br>
			<a href='/users/login'>Log In</a>

							
		</div>

	<?php endif; ?>