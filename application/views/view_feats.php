
		<table class="table">
			<thead>
				<tr>
					<th>Feat</th>
					<th>Benefit</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($feats as $feat) :?>
				<tr>
					<td><?php echo $feat->title; ?></td>
					<td><?php echo $feat->benefit; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>		
		
		