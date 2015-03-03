<div class="panel panel-default">
	<div class="panel-heading">
		<span><?php echo $title; ?></span>
		<div class="panel-actions">
			<a href="/character/add" class="btn btn-primary">Create Character</a>
		</div>
	</div>
	<div class="panel-body">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Name</th>
					<th>Level</th>
					<th>Race</th>
					<th>Class</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($characters as $character) :?>
				<tr>
					<td><?php echo $character->name;?></td>
					<td><?php echo $character->level;?></td>
					<td><?php echo $character->race;?></td>
					<td><?php echo $character->class;?></td>
					<td>
						<a href="/character/edit/<?php echo $character->id; ?>" class="btn btn-primary">Edit</a>
						<a href="/character/view/<?php echo $character->id; ?>" class="btn btn-primary">View</a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>