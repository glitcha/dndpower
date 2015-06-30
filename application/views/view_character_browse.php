<div class="navbar navbar-static-top affix" role="navigation" data-spy="affix" data-offset-top="1" data-offset-bottom="0">
	<div class="container home">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/cms/page/default">
				<span>D&D 4th</span>
			</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav home">
				<li><a href="/character/add">Create Character</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="panel panel-default">

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
