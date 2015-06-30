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
		<span><?php echo $title; ?></span>
		<div class="panel-actions">
			<a class="btn btn-warning" href="/character/browse">Browse</a>
			<a class="btn btn-success" href="#" onclick="$('#form-feats').submit();return false;" class="buttonH bGreen">Save</a>
			<a class="btn btn-primary" href="/character/view/<?php echo $character->id; ?>">view</a>
			<a class="btn btn-primary" href="/character/edit/<?php echo $character->id; ?>">Character</a>
			<a class="btn btn-primary" href="/character/powers/<?php echo $character->id; ?>">Powers</a>
			<a class="btn btn-primary" href="/character/skills/<?php echo $character->id; ?>">Skills</a>
			<a class="btn btn-primary" href="/character/feats/<?php echo $character->id; ?>">Feats</a>
			<a class="btn btn-primary" href="/character/extras/<?php echo $character->id; ?>">Extras</a>
		</div>
	</div>
	<div class="panel-body">
		
		<form id="form-feats" action="/character/feats/<?php echo $character->id;?>" method="post">
			<table class="table">
				<thead>
					<tr>
						<th>Feat</th>
						<th>Type</th>
						<th>Prerequisites</th>
						<th>Benefit</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($feats as $feat) :?>
					<tr>
						<td><?php echo $feat->title; ?></td>
						<td><?php echo $feat->type; ?></td>
						<td><?php echo $feat->prerequisites; ?></td>
						<td><?php echo $feat->benefit; ?></td>
						<td>
							<input type="checkbox" name="feat_<?php echo $feat->id;?>" <?php if ($feat->cf_id != null):?>checked="checked"<?php endif;?>/>
						</td>
					</tr>
				<?php endforeach; ?>	
				</tbody>
			</table>
		</form>
	</div>
</div>