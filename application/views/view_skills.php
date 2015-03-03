		

		<table class="table">
			<thead>
				<tr>
					<th>Skill</th>
					<th>Trained</th>
					<th>Attribute</th>
					<th>Bonus</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($skills as $skill) :?>
				<tr>
					<td><?php echo $skill->title; ?></td>
					<td><?php if ($skill->cs_id !== null) { echo 'Yes'; }?></td>
					<td><?php echo $skill->attribute; ?></td>
					<td>
						<?php echo $skill->bonus; ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>		
		
		