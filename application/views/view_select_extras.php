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
				<li><a href="/character/browse">View Characters</a></li>
				<li><a href="/character/edit/<?php echo $character->id; ?>">Edit Character</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		<h1><?php echo $title; ?></h1>
		<div class="panel-actions">
			<a class="btn btn-warning" href="/character/edit/<?php echo $character_id; ?>" class="buttonH bGreen">Back</a>
			<a class="btn btn-success" href="/extra/add/<?php echo $character_id; ?>" class="buttonH bBlue">Add</a>
		</div>
	</div>
	<div class="panel-body">
		<div class="panel panel-default">
	
			<table class="table">
				<thead>
					<tr>
						<th>Title</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($extras as $extra) :?>
					<tr>
						<td><?php echo $extra->title; ?></td>
						<td>
							<a class="btn btn-primary" href="/extra/edit/<?php echo $extra->id; ?>" class="buttonH bBlue">Edit</a>
							<a class="btn btn-danger" href="/extra/delete/<?php echo $extra->id; ?>" class="buttonH bBlue">Delete</a>
						</td>
					</tr>
				<?php endforeach; ?>	
				</tbody>
			</table>
		</div>
	</div>
</div>

