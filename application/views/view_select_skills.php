<div class="panel panel-default">
	<div class="panel-heading">
		<span><?php echo $title; ?></span>
		<div class="panel-actions">
			<a class="btn btn-primary" href="/character/browse" class="buttonH bGreen">Back</a>
			<a class="btn btn-primary" href="#" onclick="$('#form-skills').submit();return false;" class="buttonH bGreen">Save</a>
		</div>
	</div>
	<div class="panel-body">
		
		<form id="form-skills" action="/character/skills/<?php echo $character->id;?>" method="post">
			<table class="table">
				<thead>
					<tr>
						<th>Skill</th>
						<th>Trained</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($skills as $skill) :?>
					<tr>
						<td><?php echo $skill->title; ?></td>
						<td>
							<input type="checkbox" name="skill_<?php echo $skill->id;?>" <?php if ($skill->cs_id != null):?>checked="checked"<?php endif;?>/>
						</td>
					</tr>
				<?php endforeach; ?>	
				</tbody>
			</table>
		</form>
	</div>
</div>