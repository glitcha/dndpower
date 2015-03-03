<div class="panel panel-default">
	<div class="panel-heading">
		<span><?php echo $title; ?></span>
		<div class="panel-actions">
			<a class="btn btn-primary" href="/character/browse" class="buttonH bGreen">Back</a>
			<a class="btn btn-primary" href="#" onclick="$('#form-feats').submit();return false;" class="buttonH bGreen">Save</a>
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