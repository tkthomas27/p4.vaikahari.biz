
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
			<td class="center"><?=$score['score']?></td>
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